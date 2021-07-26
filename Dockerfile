FROM php:8.0.8-apache

RUN a2enmod rewrite \
    && a2enmod headers\
    && docker-php-ext-install pdo \
    && docker-php-ext-install pdo_mysql