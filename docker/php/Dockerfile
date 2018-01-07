FROM php:7.2-apache

# Install dependencies
RUN apt-get update -y && apt-get install -y libpng-dev curl libssl-dev libcurl4-openssl-dev pkg-config

# Enable mysql, gd & curl php support
RUN docker-php-ext-install pdo pdo_mysql gd curl
RUN a2enmod rewrite
RUN service apache2 restart

# Apache Config
COPY ./000-default.conf /etc/apache2/sites-available/000-default.conf

# Copy php.ini
COPY ./php.ini /usr/local/etc/php/php.ini

# User
RUN usermod -u 1000 www-data
