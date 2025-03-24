FROM dunglas/frankenphp

# Be sure to replace "your-domain-name.example.com" by your domain name
ENV SERVER_NAME=kgadek.pl
# If you want to disable HTTPS, use this value instead:
#ENV SERVER_NAME=:80

# Install Composer and essential dependencies
RUN apt-get update && apt-get install -y \
    curl \
    zip \
    unzip \
    nodejs \
    npm

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Enable PHP production settings
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Set working directory
WORKDIR /app

# Copy the PHP files of your project
COPY . /app

# Run Laravel setup commands (this will be executed when building the image)
RUN composer install && \
    npm install && \
    npm run build && \
    php artisan key:generate
