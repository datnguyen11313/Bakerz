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
    nano\
  netcat-openbsd


# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy source code
COPY . .

# Ensure public/storage doesn't break build if exists
RUN rm -f public/storage || true

# ✅ Gỡ bỏ các lệnh phụ thuộc DB (để chạy sau khi container khởi động)
# RUN composer install --no-dev --optimize-autoloader
# RUN php artisan key:generate

# Set permissions
RUN chmod -R 777 storage bootstrap/cache

# Copy script wait-for-mysql.sh vào container
COPY wait-for-mysql.sh /wait-for-mysql.sh

# Cho phép thực thi script
RUN chmod +x /wait-for-mysql.sh

# Sử dụng script để đợi MySQL sẵn sàng rồi mới chạy Laravel
CMD ["/bin/sh", "/wait-for-mysql.sh"]



