FROM php:8.2-fpm-alpine3.17

# RUN apk add postgresql-dev \
  # libzip-dev 

# RUN docker-php-ext-install  zip \
  # pgsql \
  # pdo \
  # pdo_pgsql

RUN apk update
RUN apk add git

RUN curl -sS https://getcomposer.org/installer | php && \
  mv composer.phar /usr/local/bin/composer

CMD ["php", "artisan" , "serve", "--host=0.0.0.0", "--port=9000"]