#!/bin/bash

chown -R www-data:www-data /var/www/html/public
chown -R www-data:www-data /var/www/html/storage
chmod -R 777 /var/www/html/public
chmod -R 777 /var/www/html/storage

composer install --no-interaction --no-progress

if [ "$(node -v 2>/dev/null)" != "v14.11.0" ]; then
    npm install -g n
    n 14.11.0
fi
npm install
npm run build

echo "Waiting for MySQL database connection..."
until php -r "try { require 'vendor/autoload.php'; \$app = require_once 'bootstrap/app.php'; \$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap(); DB::connection()->getPdo(); exit(0); } catch (\Throwable \$e) { exit(1); }" 2>/dev/null; do
    sleep 2
done

php artisan key:generate            # generujemy klucz
php artisan migrate:fresh --seed    # robimy migracje wraz z seed'ami #
php artisan cache:clear             # czyścimy cache
php artisan config:clear            # czyścimy konfiguracje
php artisan route:clear             # czyścimy routing
php artisan jwt:secret --always-no

cd public
ln -sf ../storage/app/public/ storage

exec docker-php-entrypoint apache2-foreground
