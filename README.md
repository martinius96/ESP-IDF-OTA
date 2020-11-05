# ESP-IDF-OTA 
* **Project: native_ota_example**
* **Version.txt: 9**
* **OTA firmware host:** https://esp32.sk/firmware.bin
* **OTA firmware host version: 9**

**Príkazy eFuses:**
* **Prehľad eFuses:** espefuse.py summary
* **Generovanie 256-bit šifrovacieho kľúča:** espsecure.py generate_flash_encryption_key secure-bootloader-key-256.bin
* **Vypálenie kľúča do eFuse:** espefuse.py burn_key secure_boot secure-bootloader-key-256.bin
* **Permanentné zapnutie Secure bootu:** espefuse.py burn_efuse ABS_DONE_0

**Príkazy pre digest:**
* **Generovanie digestu:** espsecure.py digest_secure_bootloader --keyfile secure-bootloader-key-256 --output ./bootloader-digest.bin build/bootloader/bootloader.bin
* **Zápis digestu do flash pamäte na offset 0x0:** esptool.py write_flash 0x0 bootloader-digest.bin

**Príkazy pre dig. podpis:**
* **Podpisanie binárky:** espsecure.py sign_data --keyfile private.pem native_ota.bin

# Menuconfig - konfigurácia
![Security features](https://i.imgur.com/tQZJ5ZS.png)
![Partition Table](https://i.imgur.com/6jPF817.png)
![Example configuration](https://i.imgur.com/VdNexRi.png)
# Verzie BME280
|BME280|ADDRESS|POPIS|
|-------------|-------------|-------------|
|<img src="https://i.imgur.com/n35LHkM.png" width="64" height="64">|0x76|4-pin verzia, štandardne I2C adresa 0x76, obsahuje pulldown na SDO vývod. Tento modul používaný v projekte. Zmena adresy možná iba prepojkou na PCB. (SDO vývod mení LSB I2C adresy)|
|<img src="https://i.imgur.com/TgIF8H6.png" width="64" height="64">|0x76/0x77 (podľa zapojenia)|6-pin verzia, štandardne I2C adresa 0x76, možno ľahkou prepojkou (pullup) na SDO prepojiť na 0x77|

# Zapojenie
|ESP32|BME280|
|-------------|-------------|
|3V3|Vcc|
|GND|GND|
|D22 (HW SCL)|SCK/SCL|
|D21 (HW SDA)|SDA|

# Tasky projektu
|Task|Funkcia|
|-------------|-------------|
|**ota_example_task**|Vykoná jednorázový HTTPS request a prevezme firmvér z umiestnenia https://esp32.sk/firmware.bin, zapíše ho do dostupnej OTA partície (aktuálne nebežiacej). Overenie digitálneho podpisu, prepis OTA_DATA argumentu a reboot rieši funkcia ON_UPDATE a následne Bootloader pri bootovaní. Následne výpis v nekonecnej slučke každé 2 sekundy o fyzickom reštarte pre stiahnutie nového firmvéru.|
|**https_get_task**|Vykonáva pravidelný HTTPS POST request s dátami obsiahnutými v Body requestu. Vždy pri behu tasku sa dynamicky vyskladá request z nameraných údajov v BME tasku. Request každých 15 sekúnd.|
|**https_get_task2**|Vykonáva pravidelný HTTPS GET request, načítava stav ZAP / VYP pre výstup - relé, aplikuje na GPIO23 (D23). Request každých 15 sekúnd.|
|**https_get_task3**|Vykonáva pravidelný HTTPS GET request, načíta stav, keď načíta RST, vykoná softvérový reštart ESP, predtým opätovným HTTP requestom potvrdí reštart. Request každých 15 sekúnd.|
|**bme280_normal_mode**|Normálny režim pre BME280, tlak oversampling 16x, teplota oversampling 2x, vlhkosť oversampling 1x, FILTER COEFF 16, STANDBY 1MS, meranie každých 5 sekúnd |
|**bme280_forced_mode**|Forced režim pre BME280, tlak oversampling 1x, teplota oversampling 1x, vlhkosť oversampling 1x, FILTER OFF, meranie každých 5 sekúnd |

# Spustenie projektu na "čistej" ESP32 platforme
* Menuconfig je vopred nastavený, nutné prepísať v Example Configuration SSID, heslo
* Vytvoriť build projektu - idf.py build **(AK HLÁSI PROBLÉM BOOTLOADER S VEREJNÝM KĽÚČOM -->Verejný kľúč musí byť premiestnený do zložky komponentu Bootloadera → zložka ESP-IDF/components/bootloader/subproject. Bez tejto zmeny nie je možné skompilovať aplikáciu - vyhotoviť build.)**
* Vypáliť 256-bit šifrovací kľúč do eFuse BLK2 --> secure-bootloader-key-256.bin a permanentne zapnúť Secure Boot vypálením 1-bit eFuse ABS_DONE_0
* Zapísať digest na offset 0x0 --> bootloader-digest.bin
* Presunút privátny kľúč private.pem do zložky /build, podpísať binárku
* Nahrať projekt do ESP32
