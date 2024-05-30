#!/bin/bash
set -e

cp .env.example .env

# Ensure the storage and cache directories are writable
chmod -R 775 storage bootstrap/cache

# If the vendor directory doesn't exist, install dependencies
if [ ! -d "vendor" ]; then
    composer install
fi

# Run database migrations
php artisan migrate --force

# Serve the application
php artisan serve --host=0.0.0.0 --port=8000
