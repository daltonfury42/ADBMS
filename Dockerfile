FROM php:7.0-apache
MAINTAINER Dalton Fury <daltonfury42@disroot.org>

COPY http/ /var/www/html/

ENV PORT ${PORT:-8080} 

ADD final-php.sh /usr/sbin/final-php
ADD database/db.sql /root/

RUN docker-php-ext-install mysqli

CMD final-php
