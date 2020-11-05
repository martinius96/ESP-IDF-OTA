# ESP-IDF-OTA 
* **Project: native_ota_example**
* **Version: 9**
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

# Tasky projektu


# Spustenie projektu na "čistej" ESP32 platforme
* Menuconfig je vopred nastavený, nutné prepísať v Example Configuration SSID, heslo
* Vytvoriť build projektu - idf.py build
* Vypáliť 256-bit šifrovací kľúč do eFuse BLK2 --> secure-bootloader-key-256.bin
* Zapísať digest na offset 0x0 --> bootloader-digest.bin
