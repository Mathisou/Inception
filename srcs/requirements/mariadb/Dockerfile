FROM alpine:3.15

RUN	apk update && apk upgrade && apk add --no-cache \
        mariadb \
        mariadb-client
        
COPY conf/configure.sh /tmp/configure.sh

#RUN chown -R 1000 /var/lib/mysql

ENTRYPOINT ["sh", "/tmp/configure.sh"]
