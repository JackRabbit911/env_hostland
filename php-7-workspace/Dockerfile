FROM php:7.3-apache

RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install bcmath

RUN pecl install xdebug && docker-php-ext-enable xdebug