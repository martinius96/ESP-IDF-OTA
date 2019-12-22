deps_config := \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/app_trace/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/aws_iot/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/bt/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/driver/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/efuse/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/esp32/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/esp_adc_cal/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/esp_event/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/esp_http_client/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/esp_http_server/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/esp_https_ota/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/espcoredump/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/ethernet/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/fatfs/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/freemodbus/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/freertos/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/heap/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/libsodium/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/log/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/lwip/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/mbedtls/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/mdns/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/mqtt/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/nvs_flash/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/openssl/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/pthread/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/spi_flash/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/spiffs/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/tcpip_adapter/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/unity/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/vfs/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/wear_levelling/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/wifi_provisioning/Kconfig \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/app_update/Kconfig.projbuild \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/bootloader/Kconfig.projbuild \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/esptool_py/Kconfig.projbuild \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/examples/system/ota/native_ota_example/main/Kconfig.projbuild \
	C:/msys32/home/Martin/esp-idf_v33/esp-idf-v3.3.1/components/partition_table/Kconfig.projbuild \
	/home/Martin/esp-idf_v33/esp-idf-v3.3.1/Kconfig

include/config/auto.conf: \
	$(deps_config)

ifneq "$(IDF_TARGET)" "esp32"
include/config/auto.conf: FORCE
endif
ifneq "$(IDF_CMAKE)" "n"
include/config/auto.conf: FORCE
endif

$(deps_config): ;
