FROM php:7.2-fpm-alpine

ADD ./code/ /var/www/html/

RUN cp $PHP_INI_DIR/php.ini-production $PHP_INI_DIR/php.ini
RUN docker-php-ext-install -j$(nproc) bcmath

EXPOSE 9000
