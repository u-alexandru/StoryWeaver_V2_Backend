# Dockerfile
FROM php:latest

RUN apt-get update -y && apt-get install -y libmcrypt-dev libonig-dev libzip-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo mbstring exif zip mysqli pdo_mysql

WORKDIR /app

COPY . .

EXPOSE 8000
