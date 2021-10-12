#!/bin/bash

rm -rf src
rm -rf vendor
rm -rf docs
rm -rf composer.lock
swagger-codegen generate \
  -i https://api.swaggerhub.com/apis/chrishemmings/AustraliaPost/1.0.0 \
  -l php \
  -o ../auspost \
  -c ./swagger-config.json

#composer install
sed -i "" 's/virtserver.swaggerhub.com\/chrishemmings\/AustraliaPost\/1.0.1/api.electioapp.com/g' src/Client/Api/*.php
