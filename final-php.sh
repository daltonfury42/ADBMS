#!/usr/bin/env bash

#Parsing DB Cedientials from Heroku //TODO enclose in an if
IFS=:@/ read uname pass host dbname<<< ${CLEARDB_DATABASE_URL:8:-15}
#dumping the DB //TODO check if file exists //TODO check if the database already exists on ClearDB
mysql --user=$uname --password=$pass --host=$host $dbname < /root/db.sql

echo Changing Apache port to $PORT

sed -i "s/testuser/$MY_SQL_USER/" /var/www/html/db_sjet.php
sed -i "s/testpass/$MY_SQL_PASSWORD/" /var/www/html/db_sjet.php


sed -i "s/80/$PORT/" /etc/apache2/ports.conf
sed -i "s/80/$PORT/" /etc/apache2/sites-enabled/000-default.conf

a2dismod mpm_event
apache2-foreground

echo Apache/PHP server initilized.


