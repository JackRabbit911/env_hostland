FROM php:7.3-apache

RUN apt-get update




RUN apt-get install -y libbz2-dev
RUN apt-get install -y libc-client-dev libkrb5-dev
RUN apt-get install -y libldap2-dev
RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev
RUN apt-get install -y libgmp-dev

# RUN apt-get install -y libmcrypt-dev
# RUN docker-php-ext-install mcrypt

# RUN apt-get install -y libxml2-dev
# RUN docker-php-ext-install soap


RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
RUN docker-php-ext-install gd

RUN docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu
RUN docker-php-ext-install ldap

RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl
RUN docker-php-ext-install imap

RUN docker-php-ext-install gmp
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN docker-php-ext-install bcmath
RUN docker-php-ext-install bz2
RUN docker-php-ext-install calendar
RUN docker-php-ext-install exif
RUN docker-php-ext-install gettext
RUN docker-php-ext-install sysvsem
RUN docker-php-ext-install sysvshm
RUN docker-php-ext-install sockets
RUN docker-php-ext-install shmop

# RUN pecl install xdebug && docker-php-ext-enable xdebug