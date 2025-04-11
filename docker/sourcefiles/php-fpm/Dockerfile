FROM php:8.3-fpm

WORKDIR "/application"

RUN apt-get update

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add dependencies
RUN apt-get update && apt-get install -y \
    libsnmp-dev \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    libcurl4-openssl-dev \
    libssl-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl

RUN apt-get update && apt-get install -y \
    curl \
    && curl -sL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && npm install --global yarn

# Add extensions
RUN docker-php-ext-install pdo_mysql mysqli zip mbstring exif pcntl bcmath gd

# Install wkhtmltopdf
UN apt-get update && apt-get install -y wkhtmltopdf

# Create html directory
RUN mkdir -p /application/var/html/
RUN chmod -R 775 /application/var/html/
RUN chown -R www-data:www-data /application/var/html/

# Create pdf directory
RUN mkdir -p /application/var/pdf/
RUN chmod -R 775 /application/var/pdf/
RUN chown -R www-data:www-data /application/var/pdf/
