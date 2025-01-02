FROM php:8.2-apache

# Instalar dependências do Laravel
RUN apt-get update && apt-get install -y \
    zip unzip git curl libpng-dev libonig-dev libxml2-dev && \
    docker-php-ext-install pdo_mysql mbstring gd

# Copiar arquivos do projeto
WORKDIR /var/www/html
COPY . .

# Instalar dependências do Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --optimize-autoloader --no-dev

# Configurar permissões
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expor a porta padrão do Apache
EXPOSE 80

CMD ["apache2-foreground"]
