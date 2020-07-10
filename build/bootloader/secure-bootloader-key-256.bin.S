/* * Data converted from C:/Users/Martin/esp-idf/examples/system/ota/native_ota_example/secure-bootloader-key-256.bin
 */
.data
.section .rodata.embedded

.global signature_verification_key_bin
signature_verification_key_bin:

.global _binary_signature_verification_key_bin_start
_binary_signature_verification_key_bin_start: /* for objcopy compatibility */
.byte 0xe1, 0x09, 0xd8, 0x8e, 0x4d, 0x1b, 0xf7, 0xb6, 0x38, 0x04, 0x3b, 0x36, 0x90, 0x68, 0xb7, 0x38
.byte 0xc8, 0xc7, 0xf8, 0x0b, 0x81, 0x83, 0x72, 0x7f, 0x07, 0xfb, 0x02, 0x15, 0xf6, 0x7f, 0x15, 0xce

.global _binary_signature_verification_key_bin_end
_binary_signature_verification_key_bin_end: /* for objcopy compatibility */


.global signature_verification_key_bin_length
signature_verification_key_bin_length:
.word 32
