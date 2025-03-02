# Usar una imagen base de PHP con Apache
FROM php:8.2-apache

# Copiar los archivos de tu aplicación al contenedor
COPY . /var/www/html/

# Instalar extensiones de PHP necesarias (si las necesitas)
RUN docker-php-ext-install pdo pdo_pgsql

# Exponer el puerto 80 (puerto por defecto de Apache)
EXPOSE 80

# Comando para iniciar Apache
CMD ["apache2-foreground"]