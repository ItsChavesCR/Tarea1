FROM php:8.3-cli

# Instalar dependencias
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev zip \
    && docker-php-ext-install zip

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Crear directorio de la app
WORKDIR /app

# Copiar archivos
COPY . .

# Instalar dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader

# Generar key si no existe
RUN php artisan key:generate || true

# Exponer puerto
EXPOSE 10000

# Comando para iniciar
CMD php artisan serve --host=0.0.0.0 --port=10000