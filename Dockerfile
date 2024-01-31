FROM php:7.4-apache

# Install MySQL extension for PHP
RUN docker-php-ext-install mysqli pdo_mysql

# Install necessary packages
RUN apt-get update && apt-get install -y \
    unzip \
    wget \
    mariadb-client

# Download and install phpMyAdmin
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.1.0/phpMyAdmin-5.1.0-all-languages.zip \
    && unzip phpMyAdmin-5.1.0-all-languages.zip \
    && mv phpMyAdmin-5.1.0-all-languages /var/www/html/phpmyadmin \
    && rm phpMyAdmin-5.1.0-all-languages.zip

# Set permissions for phpMyAdmin
RUN chown -R www-data:www-data /var/www/html/phpmyadmin

# Copy index.php and seed.php into the Docker container
COPY index.php /var/www/html/index.php
COPY seed.php /var/www/html/seed.php

# Set permissions and ownership for index.php and seed.php
RUN chmod a+r /var/www/html/index.php && chmod a+r /var/www/html/seed.php && chown www-data:www-data /var/www/html/index.php /var/www/html/seed.php

# Enable Apache mod_rewrite
RUN a2enmod rewrite