FROM php:7.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pgsql pdo pdo_pgsql pdo_mysql mbstring exif pcntl bcmath gd 

# Install PHP Redis
RUN pecl install redis && docker-php-ext-enable redis

# Install Xdebug
RUN pecl install xdebug-3.1.5 \
    && docker-php-ext-enable xdebug

# Get Composer
COPY --from=composer:1.9.0 /usr/bin/composer /usr/bin/composer