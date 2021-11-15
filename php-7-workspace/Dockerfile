FROM php:7.3-apache

RUN apt-get update
RUN apt-get install -y libbz2-dev

RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install bcmath
RUN docker-php-ext-install bz2
RUN docker-php-ext-install calendar
RUN docker-php-ext-install exif

# RUN pecl install xdebug && docker-php-ext-enable xdebug