# Base image
FROM php:5.6-apache

# Set working directory
WORKDIR /var/www/html

# Enable Apache rewrite module
RUN a2enmod rewrite

# Install PHP extensions required by CodeIgniter
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy CodeIgniter files to the container
COPY . /var/www/html

# Set permissions for CodeIgniter files
RUN chown -R www-data:www-data /var/www/html

CMD ["php","spark","serve"]