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
    npm

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

# Copy files from build stage
COPY --from=build /var/www/html .

# Expose port untuk Railway (biasanya 3000)
EXPOSE 3000

# Jalankan Laravel menggunakan php artisan serve
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=3000"]
