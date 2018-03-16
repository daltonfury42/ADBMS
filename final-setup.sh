#!/usr/bin/env bash

echo PORT=$PORT, MY_SQL_USER=$MY_SQL_USER MY_SQL_PASSWORD=$MY_SQL_PASSWORD


sed -i "s/80/$PORT/" /etc/httpd/conf/httpd.conf 
sed -i "s/80/$PORT/" /etc/httpd/conf/extra/httpd-vhosts.conf
httpd -k restart
echo Changed ports and restarted apache

mysqladmin ping --silent

function waitForMysql {
    while [[ $(mysqladmin ping --silent) != "mysqld is alive" ]]; do
        printf .
        lf=$'\n'
        sleep 1
    done
    printf "$lf"
}

echo "Waiting for mysql to start"
sleep 10
#waitForMysql
echo "mysql started"


mysql -u root -e "CREATE DATABASE SJET"
mysql -u root -e "CREATE USER '$MY_SQL_USER'@'localhost' IDENTIFIED BY '$MY_SQL_PASSWORD';"
mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO '$MY_SQL_USER'@'localhost' WITH GRANT OPTION;"
mysql -u root -e "FLUSH PRIVILEGES"
mysql -u root SJET < /root/SJET.sql

#chmod 777 -R /var/www/site/app/uploads/
#chmod 777 -R /var/www/site/app/assets/

