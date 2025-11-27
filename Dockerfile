# ---------------------------------------------
# 1) Build stage (Composer + Node for Vite)
# ---------------------------------------------
FROM richarvey/nginx-php-fpm:latest as build

# Set working directory
WORKDIR /var/www/html

# Copy all project files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install Node and build Vite
RUN apk add --no-cache nodejs npm
RUN npm install && npm run build


# ---------------------------------------------
# 2) Production Stage
# ---------------------------------------------
FROM richarvey/nginx-php-fpm:latest

# Set working directory
WORKDIR /var/www/html

# Copy project from build stage
COPY --from=build /var/www/html .

# Expose port yang dipakai Render
EXPOSE 8080

# Jalankan Laravel bawaan image (nginx + php-fpm)
CMD ["start"]
