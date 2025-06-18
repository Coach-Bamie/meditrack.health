FROM php:8.2-apache

# Install mysqli and other extensions
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Enable Apache rewrite module
RUN a2enmod rewrite

# Copy project files to Apache's root
COPY . /var/www/html/

# Set permissions (optional but good practice)
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
