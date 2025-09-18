# Use PHP with Apache
FROM php:8.2-apache

# Install PDO MySQL and mysqli extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli && docker-php-ext-enable pdo_mysql mysqli

# Copy app code to container
COPY . /var/www/html/

# Expose Apache port
EXPOSE 80
