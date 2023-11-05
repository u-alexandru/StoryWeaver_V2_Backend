#!/bin/bash
cp .env.example .env
composer install
php artisan optimize:clear
php artisan key:generate
php artisan serve --host=0.0.0.0 --port=8000
