# Image de base PHP 8.2 avec Apache
FROM php:8.2-apache

# Compatible Mac ARM (M1/M2)
# Note: php:8.2-apache supporte déjà ARM nativement

# Installation des dépendances système
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    && rm -rf /var/lib/apt/lists/*

# Installation des extensions PHP nécessaires
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
    pdo \
    pdo_mysql \
    mysqli \
    gd \
    zip

# Activation du module rewrite d'Apache
RUN a2enmod rewrite

# Configuration Apache : définir le document root
ENV APACHE_DOCUMENT_ROOT /var/www/html

# Ajuster la configuration Apache pour le document root
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Port exposé
EXPOSE 80

# Commande par défaut : démarrer Apache
CMD ["apache2-foreground"]

