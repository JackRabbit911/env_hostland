FROM php:7.3-apache

RUN apt-get update

RUN apt-get install -y libbz2-dev
RUN apt-get install -y libc-client-dev libkrb5-dev
RUN apt-get install -y libldap2-dev
RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev
RUN apt-get install -y libgmp-dev
RUN apt-get install -y libtidy-dev
RUN apt-get install -y libxslt-dev
RUN apt-get install -y libzip-dev
RUN apt-get install -y libicu-dev
RUN apt-get install -y libmcrypt-dev
RUN apt-get install -y libmemcached-dev zlib1g-dev
RUN apt-get install -y libmagickwand-dev --no-install-recommends
RUN apt-get install -y libxml2-dev && apt-get clean -y

RUN pecl install -o -f redis &&  rm -rf /tmp/pear &&  docker-php-ext-enable redis

RUN docker-php-ext-install soap
RUN pecl install memcached-3.1.4 && docker-php-ext-enable memcached
RUN pecl install mcrypt-1.0.4 && docker-php-ext-enable mcrypt

RUN pecl install imagick && docker-php-ext-enable imagick && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
RUN docker-php-ext-install gd

RUN docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu
RUN docker-php-ext-install ldap

RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl
RUN docker-php-ext-install imap

RUN docker-php-ext-install zip
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
RUN docker-php-ext-install tidy
RUN docker-php-ext-install xsl
RUN docker-php-ext-install wddx
RUN docker-php-ext-install xmlrpc
RUN docker-php-ext-configure intl
RUN docker-php-ext-install intl
RUN pecl install xdebug && docker-php-ext-enable xdebug
RUN docker-php-ext-install -j$(nproc) opcache

RUN echo 'ServerName localhost:80' >> /etc/apache2/apache2.conf
RUN a2enmod rewrite

# ЗАСАДА!

# Step 32/32 : RUN docker-php-ext-install xmlrpc
#  ---> Running in 0d75e496afed
# Configuring for:
# PHP Api Version:         20180731
# Zend Module Api No:      20180731
# Zend Extension Api No:   320180731
# config.m4:80: warning: AC_REQUIRE: `AC_HEADER_STDC' was expanded before it was required
# config.m4:80: http://www.gnu.org/software/autoconf/manual/autoconf.html#Expanded-Before-Required
# ../../lib/autoconf/headers.m4:297: _AC_INCLUDES_DEFAULT_REQUIREMENTS is expanded from...
# ../../lib/autoconf/headers.m4:353: AC_INCLUDES_DEFAULT is expanded from...
# ../../lib/autoconf/headers.m4:129: _AC_CHECK_HEADER_MONGREL is expanded from...
# ../../lib/autoconf/headers.m4:67: AC_CHECK_HEADER is expanded from...
# ../../lib/m4sugar/m4sh.m4:607: AS_FOR is expanded from...
# ../../lib/autoconf/headers.m4:249: AC_CHECK_HEADERS is expanded from...
# libxmlrpc/acinclude.m4:13: XMLRPC_HEADER_CHECKS is expanded from...
# libxmlrpc/xmlrpc.m4:1: XMLRPC_CHECKS is expanded from...
# config.m4:80: the top level
# config.m4:80: warning: AC_REQUIRE: `AC_HEADER_STDC' was expanded before it was required
# config.m4:80: http://www.gnu.org/software/autoconf/manual/autoconf.html#Expanded-Before-Required
# ../../lib/autoconf/headers.m4:297: _AC_INCLUDES_DEFAULT_REQUIREMENTS is expanded from...
# ../../lib/autoconf/headers.m4:353: AC_INCLUDES_DEFAULT is expanded from...
# ../../lib/autoconf/headers.m4:129: _AC_CHECK_HEADER_MONGREL is expanded from...
# ../../lib/autoconf/headers.m4:67: AC_CHECK_HEADER is expanded from...
# ../../lib/m4sugar/m4sh.m4:607: AS_FOR is expanded from...
# ../../lib/autoconf/headers.m4:249: AC_CHECK_HEADERS is expanded from...
# libxmlrpc/acinclude.m4:13: XMLRPC_HEADER_CHECKS is expanded from...
# libxmlrpc/xmlrpc.m4:1: XMLRPC_CHECKS is expanded from...
# config.m4:80: the top level
