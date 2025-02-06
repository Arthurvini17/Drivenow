FROM php:8.2-apache

# Instala dependências do sistema
RUN apt-get update && \
    apt-get install -y \
    libzip-dev \
    zip \
    curl \
    gnupg

# Instala Node.js e npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs

# Habilita mod_rewrite para Laravel funcionar corretamente
RUN a2enmod rewrite

# Instala extensões do PHP
RUN docker-php-ext-install pdo_mysql zip

# Define o Document Root do Apache
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Copia os arquivos do projeto para o container
COPY . /var/www/html
WORKDIR /var/www/html

# Instala o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# Instala dependências do NPM e faz o build do Vite
RUN npm install
RUN npm run build

# Permissões corretas para as pastas do Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Executa as migrations do banco de dados
RUN php artisan migrate --force
