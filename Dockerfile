FROM php:7.0-apache
MAINTAINER Dalton Fury <daltonfury42@disroot.org>

COPY http/ /var/www/html/

ENV MY_SQL_USER ${MY_SQL_USER:-testuser}
ENV MY_SQL_PASSWORD ${MY_SQL_PASSWORD:-testpass}
ENV PORT ${PORT:-8080} 

ADD final-php.sh /usr/sbin/final-php

RUN sudo apt-get -y install php-mysql

CMD final-php
