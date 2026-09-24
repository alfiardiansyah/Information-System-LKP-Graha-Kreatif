#!/bin/sh
set -e

# Ensure SQLite database exists and is writable
mkdir -p database
touch database/database.sqlite
chmod 777 database
chmod 666 database/database.sqlite

# Ensure storage directories exist and are writable
mkdir -p storage/framework/cache/data storage/framework/sessions storage/framework/views storage/logs storage/app/public
chmod -R 777 storage bootstrap/cache

# Symlink public storage
php artisan storage:link || true

# Run migrations and seed demo data automatically
echo "Running database migrations and seeders..."
php artisan migrate --force --seed

# Cache configurations for production speed
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start built-in server with dynamic PORT provided by Render
PORT="${PORT:-10000}"
echo "Starting Laravel on port ${PORT}..."
exec php artisan serve --host=0.0.0.0 --port="${PORT}"
