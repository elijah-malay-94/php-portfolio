FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    git curl zip unzip nodejs npm \
    libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install mbstring bcmath \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN composer install --no-dev --optimize-autoloader --no-interaction
RUN npm install && npm run build
RUN touch database/database.sqlite
RUN chmod -R 775 storage bootstrap/cache

EXPOSE 8000

CMD sh -c "php artisan config:clear && php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=${PORT:-8000}"
