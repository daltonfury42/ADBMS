#!/usr/bin/env bash

echo "Starting Servers"
start-servers 
echo "Done"

#export PORT=${1:-443}
#export $MYSQL_USER=$2
#export $MYSQL_PASSWORD=$3

function waitForMysql {
    while [[ $(mysqladmin ping --silent) != "mysqld is alive" ]]; do
        printf .
        lf=$'\n'
        sleep 1
    done
    printf "$lf"
}

waitForMysql

echo PORT=$PORT, MY_SQL_USER=$MY_SQL_USER MY_SQL_PASSWORD=$MY_SQL_PASSWORD

sed -i "s/443/$PORT/" /etc/httpd/conf/extra/httpd-ssl.conf 
httpd -k restart

mysql -u root -e "CREATE DATABASE SJET"
mysql -u root -e "CREATE USER '$MY_SQL_USER'@'localhost' IDENTIFIED BY '$MY_SQL_PASSWORD';"
mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO '$MY_SQL_USER'@'localhost' WITH GRANT OPTION;"
mysql -u root -e "FLUSH PRIVILEGES"
mysql -u root SJET < /root/SJET.sql

#chmod 777 -R /var/www/site/app/uploads/
#chmod 777 -R /var/www/site/app/assets/
