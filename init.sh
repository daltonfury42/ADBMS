#!/bin/bash

echo $1 > /root/test

sed -i "s/8080/$1/" /etc/apache2/sites-enabled/000-default.conf; 
echo Listen $1 >> /etc/apache2/ports.conf 

service mysql start; 

mysql -u root -pstrangehat -e "CREATE DATABASE SJET"
mysql -u root -pstrangehat SJET < /root/SJET.sql

chmod 777 -R /var/www/site/app/uploads/
chmod 777 -R /var/www/site/app/assets/

/usr/sbin/apache2ctl -D FOREGROUND
