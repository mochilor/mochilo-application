FROM php:7.2-fpm

RUN apt-get update && apt-get install -y git zip unzip gnupg\
&& curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer\
&& curl -sL https://deb.nodesource.com/setup_10.x | bash -\
&& apt-get install -y nodejs build-essential
RUN pecl install xdebug && docker-php-ext-enable xdebug
RUN npm install gulp-cli -g
RUN npm install gulp -D