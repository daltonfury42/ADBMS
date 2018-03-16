FROM greyltc/lamp
MAINTAINER Dalton Fury <daltonfury42@disroot.org>

ENV MYSQL_USER ${MY_SQL_USER:-testuser}
ENV MYSQL_PASSWORD ${MY_SQL_PASSWORD:-testpass}
ENV PORT ${PORT:-443} 

ADD http /srv/http/

ADD SJET.sql /root
ADD final-setup.sh /usr/sbin/final-setup

CMD start-servers; setup-mysql-user; final-setup $PORT $MYSQL_USER $MYSQL_PASSWORD; sleep infinity
