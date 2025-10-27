# Use the official PHP 8 image
FROM php:8.2-cli

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy all files
COPY . .

# Install dependencies
RUN composer install --no-interaction --no-dev --optimize-autoloader

# Expose port 10000 for Render
EXPOSE 10000

# Start PHP’s built-in web server
CMD ["php", "-S", "0.0.0.0:10000", "-t", "."]

