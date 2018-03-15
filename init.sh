#!/bin/bash


service mysql start; 

mysql -u root -pstrangehat -e "CREATE DATABASE SJET"
mysql -u root -pstrangehat SJET < /root/SJET.sql

chmod 777 -R /var/www/site/app/uploads/
chmod 777 -R /var/www/site/app/assets/

/usr/sbin/apache2ctl -D FOREGROUND
