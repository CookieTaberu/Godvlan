# Use the PHP 8.3 image as base
FROM php:8.3

# Install system dependencies required for Laravel
RUN apt-get update && apt-get install -y \
    libpq-dev \
    zip \
    git \
    unzip \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Install Composer (PHP dependency manager)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory inside the container
WORKDIR /resources

# Copy application files to the container
COPY . /resources

# Install PHP dependencies using Composer
RUN composer install --no-dev --optimize-autoloader

# Expose the port Laravel will run on
EXPOSE 8000

# Set the command to run Laravel development server
CMD ["php", "artisan", "serve","--host=0.0.0.0", "--port=8000"]
 