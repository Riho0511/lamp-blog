FROM php:8.0.13-apache

COPY ./php.ini /usr/local/etc/php/

RUN apt-get update && apt-get install -y libonig-dev && docker-php-ext-install pdo_mysql mysqli mbstring exif

WORKDIR /var/www/html