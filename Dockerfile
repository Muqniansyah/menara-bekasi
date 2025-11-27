# Build stage
FROM php:8.2-fpm-alpine AS build

WORKDIR /var/www/html

# Install dependencies
RUN apk add --no-cache \
    bash \
    curl \
    zip \
    unzip \
    nodejs \
    npm \
    mysql-client \
    icu-dev \
    oniguruma-dev

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql intl

# Install composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy project files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Build Vite
RUN npm install && npm run build


# Production stage
FROM php:8.2-fpm-alpine

WORKDIR /var/www/html

# Install PHP extensions again in prod stage
RUN apk add --no-cache \
    mysql-client \
    icu-dev \
    oniguruma-dev

RUN docker-php-ext-install pdo pdo_mysql intl

# Copy files from build stage
COPY --from=build /var/www/html .

EXPOSE 3000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=3000"]
