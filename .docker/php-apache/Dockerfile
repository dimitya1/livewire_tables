FROM php:8.2.3-apache

# update packages
RUN apt-get update  \
    && apt-get install -y \
        zlib1g-dev  \
        libpng-dev  \
        libzip-dev  \
        unzip  \
    && docker-php-ext-install -j$(nproc) pdo_mysql \
    && docker-php-ext-install -j$(nproc) zip

# copy custom site configuration
COPY ./etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/000-default.conf

# copy certificates
COPY ./etc/letsencrypt /etc/letsencrypt

# enable rewrite engine for htaccess
RUN a2enmod rewrite \
    && a2enmod ssl \
    && service apache2 restart

# install composer
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# copy source code
COPY . /var/www/html
