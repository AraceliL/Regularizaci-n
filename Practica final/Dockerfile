#imagen padre
FROM php:8.0-apache
RUN apt-get update && apt-get upgrade -y
#Dependencias
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli


#Copiar los archivos de imagen
COPY ./crud /var/www/html

EXPOSE 80







