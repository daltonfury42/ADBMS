FROM ubuntu:latest
MAINTAINER Dalton Fury <daltonfury42@disroot.org>

RUN apt-get update
RUN apt-get -y upgrade

RUN echo "mysql-server mysql-server/root_password password strangehat" | debconf-set-selections
RUN echo "mysql-server mysql-server/root_password_again password strangehat" | debconf-set-selections

# Install apache, PHP, and supplimentary programs. curl and lynx-cur are for debugging the container.
RUN DEBIAN_FRONTEND=noninteractive apt-get -y install apache2 libapache2-mod-php php-mysql php-gd php-pear php-mcrypt php-curl php-ldap curl lynx-cur mysql-client mysql-server


# Enable apache mods.
RUN phpenmod openssl
RUN a2enmod rewrite

# Manually set up the apache environment variables
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid

EXPOSE 80

# Copy site into place.
ADD app /var/www/site/app

# Update the default apache site with the config we created.
ADD apache-config.conf /etc/apache2/sites-enabled/000-default.conf
RUN sed -i "s/8080/${PORT}/" /etc/apache2/sites-enabled/000-default.conf
RUN echo Listen ${PORT} >> /etc/apache2/ports.conf 
ADD SJET.sql /root/SJET.sql
ADD init.sh /root/init.sh

# By default, simply start apache.
CMD bash /root/init.sh
