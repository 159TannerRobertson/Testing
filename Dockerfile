FROM php:7.0-apache
COPY lsapp/ /var/www/html
EXPOSE 80