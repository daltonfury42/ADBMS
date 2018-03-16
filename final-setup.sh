#!/usr/bin/env bash

export PORT=${1:-443}
export $MYSQL_USER=$2
export $MYSQL_PASSWORD=$3

echo PORT=$PORT, MYSQL_USER=$MYSQL_USER MYSQL_PASSWORD=$MYSQL_PASSWORD
echo PORT=$PORT, MYSQL_USER=$MYSQL_USER MYSQL_PASSWORD=$MYSQL_PASSWORD

#sed -i "s/8080/$PORT/" /etc/apache2/sites-enabled/000-default.conf; 
#echo Listen $PORT >> /etc/apache2/ports.conf; 

mysql -u root -e "CREATE DATABASE SJET"
mysql -u root SJET < /root/SJET.sql

#chmod 777 -R /var/www/site/app/uploads/
#chmod 777 -R /var/www/site/app/assets/

