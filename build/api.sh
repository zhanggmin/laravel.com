#!/bin/bash

cd /var/www/laravel-china/build/sami

rm -rf /var/www/laravel-china/build/sami/build
rm -rf /var/www/laravel-china/build/sami/cache

# Run API Docs
git clone https://github.com/laravel/framework.git /var/www/laravel-china/build/sami/laravel

php /var/www/laravel-china/vendor/bin/sami.php update /var/www/laravel-china/build/sami/sami.php

cp -r /var/www/laravel-china/build/sami/build/* /var/www/laravel-china/public/api

rm -rf /var/www/laravel-china/build/sami/build
rm -rf /var/www/laravel-china/build/sami/cache

# Cleanup
rm -rf /var/www/laravel-china/build/sami/laravel
