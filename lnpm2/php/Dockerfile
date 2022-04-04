FROM php:7.4-fpm
MAINTAINER 211906110
COPY sources.list /etc/apt/
#RUN chmod a+x /etc/apt/sources.list

RUN apt-get update && apt-get install -y \
 libfreetype6-dev \
 libjpeg62-turbo-dev \
 libpng-dev \
 && docker-php-ext-install pdo_mysql \
 && docker-php-ext-configure gd --with-freetype --with-jpeg \
 && docker-php-ext-install -j$(nproc) gd