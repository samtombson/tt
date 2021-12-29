FROM php:7.4-fpm
RUN apt-get update
RUN apt-get install -y libmagickwand-dev libcurl4-openssl-dev libzip-dev
RUN rm -rf /var/lib/apt/lists/*
# https://make.wordpress.org/hosting/handbook/server-environment/#php-extensions
RUN pecl install imagick
RUN docker-php-ext-install exif zip mysqli pdo pdo_mysql
RUN docker-php-ext-enable imagick exif zip mysqli pdo pdo_mysql
