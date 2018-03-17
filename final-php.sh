#!/usr/bin/env bash

echo PORT=$PORT, MY_SQL_USER=$MY_SQL_USER MY_SQL_PASSWORD=$MY_SQL_PASSWORD

sed -i "s/testuser/$MY_SQL_USER/" /var/www/html/db_sjet.php
sed -i "s/testpass/$MY_SQL_PASSWORD/" /var/www/html/db_sjet.php


sed -i "s/80/$PORT/" /etc/apache2/ports.conf
sed -i "s/80/$PORT/" /etc/apache2/sites-enabled/000-default.conf

apache2-foreground

echo Apache/PHP server initilized.


