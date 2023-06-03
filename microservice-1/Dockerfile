FROM php:7.4-apache

# Copy the PHP code into the container
COPY . /var/www/html/

# Install mysqli extension
RUN docker-php-ext-install mysqli
