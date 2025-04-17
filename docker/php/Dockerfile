FROM php:7.2-fpm

RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev libzip-dev zip unzip \
    && docker-php-ext-install pdo pdo_mysql mysqli \
    && docker-php-ext-enable pdo_mysql

COPY . /var/www/html

COPY database.php.docker /var/www/html/app/Config/database.php

COPY php.ini /usr/local/etc/php/

WORKDIR /var/www/html
