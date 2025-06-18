# Use the official PHP 8.2 image with Apache
FROM php:8.2-apache

# Enable Apache mod_rewrite (for pretty URLs, optional)
RUN a2enmod rewrite

# Set working directory inside the container
WORKDIR /var/www/html

# Copy your app's files into the container
COPY . /var/www/html

# (Optional) Set file permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 (default Apache port)
EXPOSE 80
