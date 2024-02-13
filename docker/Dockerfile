FROM php:fpm

ARG user
ARG uid

RUN apt update -y && apt-get update -y

RUN apt-get -y install apt-utils nano wget dialog vim

RUN apt-get update && apt-get install -y --fix-missing \
    apt-utils \
    build-essential \
    libcurl4 \
    libcurl4-openssl-dev \
    zlib1g-dev \
    libzip-dev \
    libpng-dev \
    libgmp-dev \
    zip \
    unzip \
    libbz2-dev \
    locales \
    libmcrypt-dev \
    libicu-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    libjpeg62-turbo-dev \
    jpegoptim optipng pngquant gifsicle \
    git \
    curl \
    msmtp \
    libsqlite3-dev \
    libcurl4-openssl-dev \
    libssl-dev

#RUN \
#    docker-php-ext-install pdo && \
#    docker-php-ext-enable pdo

RUN \
    docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql && \
    docker-php-ext-install pdo_pgsql && \
    docker-php-ext-enable pdo_pgsql && \
    docker-php-ext-install pgsql && \
    docker-php-ext-enable pgsql

RUN \
    docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd && \
    docker-php-ext-install pdo_mysql && \
    docker-php-ext-configure mysqli --with-mysqli=mysqlnd && \
    docker-php-ext-install mysqli

RUN \
   docker-php-ext-install intl && \
   docker-php-ext-install exif && \
   docker-php-ext-install gmp && \
   docker-php-ext-install bcmath && \
   docker-php-ext-install mbstring && \
   docker-php-ext-install zip && \
   docker-php-ext-install sockets && \
   docker-php-ext-install soap
#   docker-php-ext-install pcntl && \
#   docker-php-ext-install ftp && \
#   docker-php-ext-install gettext

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

WORKDIR /var/www/

USER $user

EXPOSE 9000
CMD ["php-fpm"]
