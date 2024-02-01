FROM php:7.4-apache

# Install necessary packages
RUN apt-get update && \
    apt-get install -y default-mysql-server unzip && \
    docker-php-ext-install mysqli pdo pdo_mysql && \
    a2enmod rewrite && \
    rm -rf /var/lib/apt/lists/*

# Download and install phpMyAdmin
RUN curl -O https://files.phpmyadmin.net/phpMyAdmin/5.1.1/phpMyAdmin-5.1.1-all-languages.zip && \
    unzip phpMyAdmin-5.1.1-all-languages.zip && \
    mv phpMyAdmin-5.1.1-all-languages /var/www/html/phpmyadmin && \
    rm phpMyAdmin-5.1.1-all-languages.zip

# Copy configuration files
COPY ./my.cnf /etc/mysql/my.cnf
COPY ./config.inc.php /var/www/html/phpmyadmin/config.inc.php
COPY ./seed.php /var/www/html/seed.php
COPY ./index.php /var/www/html/index.php

COPY ./grant-privileges.sql /grant-privileges.sql
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf