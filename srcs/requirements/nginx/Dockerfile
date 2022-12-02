FROM alpine:3.15

RUN 	apk update && apk upgrade && apk add --no-cache
RUN     apk add nginx 
RUN     apk add openssl

RUN mkdir -p /run/nginx
COPY conf/nginx.conf /etc/nginx/http.d/default.conf

RUN mkdir /etc/nginx/ssl
RUN	openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes \
	-out /etc/nginx/ssl/maroly.pem \
	-keyout /etc/nginx/ssl/maroly.key \
	-subj "/C=IT/ST=Rome/L=Rome/O=42 School/OU=maroly/CN=maroly"

EXPOSE 443

#RUN chown -R 1000 /var/www/html

ENTRYPOINT ["nginx", "-g", "daemon off;"]
