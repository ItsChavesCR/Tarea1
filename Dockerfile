FROM php:8.3-cli

RUN apt-get update && apt-get install -y \
    unzip \
    git \
    sqlite3 \
    libsqlite3-dev

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

# 🔥 CREAR .env DESDE EL EJEMPLO
RUN cp .env.example .env

# Crear SQLite
RUN mkdir -p database && touch database/database.sqlite

# Instalar Laravel
RUN composer install --no-dev --optimize-autoloader

# Permisos
RUN chmod -R 777 storage bootstrap/cache database

# 🔑 Generar key
RUN php artisan key:generate

# Migraciones y seeders
RUN php artisan migrate --force
RUN php artisan db:seed --force

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000