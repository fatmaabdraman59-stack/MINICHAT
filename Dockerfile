# Étape 1 : Build frontend avec Node.js
FROM php:8.2-apache

COPY . /var/www/html/
WORKDIR /var/www/html
# FROM node:22 AS frontend-builder
# RUN npm install
# RUN npm run build
# Étape 2 : Serveur PHP avec Apache
# Installation des dépendances nécessaires
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    libicu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install pdo pdo_mysql mysqli mbstring zip dom

#RUN docker-php-ext-install pdo pdo_mysql mysqli mbstring intl zip dom


# Activation du module rewrite (utile pour les frameworks)
RUN a2enmod rewrite

# Copie du frontend compilé dans le dossier public
#COPY /app /var/www/html/

#WORKDIR /var/www/html

# Exécution du script PHP au build (à éviter si ce script est dynamique)
CMD ["php", "script.php"]


EXPOSE 80