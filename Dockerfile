# Use official PHP Apache image
FROM php:8.2-apache

# Copy application files to Apache root
COPY . /var/www/html/

# Expose port 80
EXPOSE 80
