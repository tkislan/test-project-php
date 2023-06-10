FROM php:8.2.7-apache

RUN docker-php-ext-install mysqli

COPY . /var/www/html/

RUN sed -i "s/Listen 80/Listen 8080/" /etc/apache2/ports.conf
RUN echo "ServerName 0.0.0.0" >> /etc/apache2/apache2.conf
