FROM php:8.0.0-apache

# Sin interacción
ARG DEBIAN_FRONTEND=noninteractive

# Utilizado en el código PHP de la página
RUN docker-php-ext-install mysqli

RUN apt-get update

# Incluye un driver para la BD alternativo
# RUN docker-php-ext-install pdo
# RUN docker-php-ext-install pdo_mysql

RUN docker-php-ext-install mbstring
RUN docker-php-ext-install zip
RUN docker-php-ext-install gd

RUN a2enmod rewrite
