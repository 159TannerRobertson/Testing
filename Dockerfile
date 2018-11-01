FROM php:7.1-apache
COPY helloworld/ /var/www/html
EXPOSE 80