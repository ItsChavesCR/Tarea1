FROM php:8.3-cli

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    sqlite3 \
    libsqlite3-dev

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Crear directorio de app
WORKDIR /app

# Copiar archivos
COPY . .

# Crear archivo SQLite si no existe
RUN mkdir -p database && touch database/database.sqlite

# Instalar dependencias Laravel
RUN composer install --no-dev --optimize-autoloader

# Permisos
RUN chmod -R 777 storage bootstrap/cache database

# Generar key
RUN php artisan key:generate

# Migraciones y seeders
RUN php artisan migrate --force
RUN php artisan db:seed --force

# Exponer puerto
EXPOSE 10000

# Iniciar servidor
CMD php artisan serve --host=0.0.0.0 --port=10000