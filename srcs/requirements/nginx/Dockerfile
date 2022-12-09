FROM alpine:3.15

RUN 	apk update && apk upgrade && apk add --no-cache
RUN     apk add nginx 
RUN     apk add openssl


RUN	openssl req -x509 -nodes -days 365 -newkey rsa:4096 \
	-out /etc/ssl/certs/nginx.crt \
	-keyout /etc/ssl/certs/nginx.key \
	-subj "/C=RU/ST=Moscow/L=Moscow/O=wordpress/CN=maroly.42.fr"


RUN mkdir -p /run/nginx

COPY conf/default /etc/nginx/http.d/default.conf


EXPOSE 443

ENTRYPOINT ["nginx", "-g", "daemon off;"]
