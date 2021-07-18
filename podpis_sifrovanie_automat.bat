#rem Podpis a šifrovanie všetkých partícií, ktoré sú štandardne šifrované (bootloader, odtlačok, tabuľka partícií, firmvér)
espsecure.py sign_data --version 1 --keyfile private.pem --output native_ota.bin native_ota.bin
espsecure.py encrypt_flash_data --keyfile my_flash_encryption_key.bin --address 0x1000 -o ./build/bootloader-encrypted.bin ./build/bootloader/bootloader.bin
espsecure.py encrypt_flash_data --keyfile my_flash_encryption_key.bin --address 0x20000 -o ./build/app-encrypted.bin ./build/native_ota.bin
espsecure.py sign_data --version 1 --keyfile private.pem --output ./build/partition_table/partition-table.bin ./build/partition_table/partition-table.bin
espsecure.py encrypt_flash_data --keyfile my_flash_encryption_key.bin --address 0x10000 -o ./build/partition_table/partition-table-encrypted.bin ./build/partition_table/partition-table.bin
espsecure.py digest_secure_bootloader --keyfile secure-bootloader-key-256.bin --output ./build/secure_bootloader.bin ./build/bootloader/bootloader.bin
espsecure.py encrypt_flash_data --keyfile my_flash_encryption_key.bin --address 0x0 -o ./build/digest-encrypted.bin ./build/secure_bootloader.bin
esptool.py write_flash 0x0 ./build/digest-encrypted.bin
esptool.py write_flash 0x1000 ./build/bootloader-encrypted.bin
esptool.py write_flash 0x10000 ./build/partition_table/partition-table-encrypted.bin
esptool.py write_flash 0x20000 ./build/app-encrypted.bin