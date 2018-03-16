FROM greyltc/lamp
MAINTAINER Dalton Fury <daltonfury42@disroot.org>

ENV MY_SQL_USER ${MY_SQL_USER:-testuser}
ENV MY_SQL_PASSWORD ${MY_SQL_PASSWORD:-testpass}
ENV PORT ${PORT:-8080} 

ENV APACHE_ENABLE_PORT_80 true

ADD http /srv/http/

ADD SJET.sql /root
ADD final-setup.sh /usr/sbin/final-setup

CMD start-servers; final-setup; sleep infinity
