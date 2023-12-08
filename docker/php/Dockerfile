FROM php:8.0.2-fpm-buster

RUN docker-php-ext-install pdo pdo_mysql bcmath opcache 

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install unzip utility and libs needed by zip PHP extension 
RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    unzip
RUN docker-php-ext-install zip

RUN chown -R www-data:www-data /var/www/

EXPOSE 9000
WORKDIR /var/www/
RUN chmod -R 755 /var/www/
ENTRYPOINT ["php-fpm"]