FROM php:8.2-fpm-alpine

# Install ekstensi yang dibutuhkan Laravel
RUN apk add --no-cache nginx wget supervisor text-base curl git libpng-dev libxml2-dev zip unzip mysql-client postgresql-dev
RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql bcmath

# Set folder kerja
WORKDIR /var/www/html
COPY . .

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# Atur permission folder storage & bootstrap
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 8080
CMD ["sh", "-c", "php artisan config:cache && php artisan route:cache && php artisan view:cache && php artisan serve --host=0.0.0.0 --port=8080"]