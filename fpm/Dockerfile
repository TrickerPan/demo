FROM php:7.2-fpm-alpine

ADD ./code/ /var/www/html/

WORKDIR /var/www/html

RUN cp $PHP_INI_DIR/php.ini-production $PHP_INI_DIR/php.ini
RUN docker-php-ext-install -j$(nproc) bcmath pdo_mysql
RUN php artisan migrate:fresh --seed

EXPOSE 9000
