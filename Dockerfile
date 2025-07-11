FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    libzip-dev \
    libpq-dev \
    libsqlite3-dev \
    sqlite3 \
    nano

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy source code
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Generate APP_KEY
RUN php artisan key:generate

# Set permissions
RUN chmod -R 777 storage bootstrap/cache

# Start Laravel built-in server
CMD php artisan serve --host=0.0.0.0 --port=8080
