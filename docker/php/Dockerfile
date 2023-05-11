FROM php:8.0.13-apache

COPY ./php.ini /usr/local/etc/php/

RUN apt-get update && apt-get install -y libonig-dev && docker-php-ext-install pdo_mysql mysqli mbstring exif

# .htaccessの有効化
RUN a2enmod rewrite

# ドキュメントルートを変更する
ENV APACHE_DOCUMENT_ROOT='/var/www/html/public/'
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

WORKDIR /var/www/html