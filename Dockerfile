FROM php:8.2-apache

# Ajout des labels de maintenance
LABEL maintainer="fatmaabdraman59@gmail.com"
LABEL version="1.0"
LABEL description="PHP Chat Application"

# Installation des dépendances
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    libicu-dev \
    curl \
    && docker-php-ext-configure intl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install pdo pdo_mysql mysqli mbstring zip dom \
    && a2enmod rewrite \
    # Nettoyage
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Création d'un utilisateur non-root
RUN useradd -r -g www-data -s /bin/bash -d /home/appuser appuser \
    && mkdir -p /home/appuser \
    && chown -R appuser:www-data /home/appuser

WORKDIR /var/www/html
COPY --chown=appuser:www-data . .

# Utilisation de l'utilisateur non-root
USER appuser

EXPOSE 80

HEALTHCHECK --interval=30s --timeout=3s \
    CMD curl -f http://localhost/ || exit 1