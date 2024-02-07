#!/bin/bash

VERSION='1.0.2'

sed -i "" "s/\"artifactVersion\": [^,]*/\"artifactVersion\": \"${VERSION}\"/g" swagger-config.json

rm -rf src
rm -rf vendor
rm -rf docs
rm -rf composer.lock
swagger-codegen generate \
  -i https://api.swaggerhub.com/apis/chrishemmings/AustraliaPost/$VERSION \
  -l php \
  -o ../auspost \
  -c ./swagger-config.json

sed -i "" "s/\"version\": [^,]*/\"version\": \"${VERSION}\"/g" composer.json
sed -i "" "s/\"license\": [^,]*/\"license\": \"MIT\"/g" composer.json
sed -i "" "s/\"homepage\": [^,]*/\"homepage\": \"https:\/\/github.com\/chrishemmings\/auspost\"/g" composer.json
