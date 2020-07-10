# ESP-IDF-OTA 
* **Project: native_ota_example**

**Príkazy eFuses:**
* **Prehľad eFuses:** espefuse.py summary
* **Generovanie 256-bit šifrovacieho kľúča:** espsecure.py generate_flash_encryption_key secure-bootloader-key-256.bin
* **Vypálenie kľúča do eFuse:** espefuse.py burn_key secure_boot secure-bootloader-key-256.bin
* **Permanentné zapnutie Secure bootu:** espefuse.py burn_efuse ABS_DONE_0
* **Zápis digestu do flash pamäte na offset 0x0:** esptool.py write_flash 0x0 bootloader-digest.bin

**Príkazy digest:**
* **Generovanie digestu:** espsecure.py digest_secure_bootloader --keyfile secure-bootloader-key-256 --output ./bootloader-digest.bin build/bootloader/bootloader.bin

* **Podpisanie binárky:** espsecure.py sign_data --keyfile private.pem native_ota.bin
