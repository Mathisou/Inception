#!/bin/sh

# wait for mysql
while ! mariadb -h$MARIADB_ROOT_HOST -u$WP_DATABASE_USER -p$WP_DATABASE_PASSWORD $WP_DATABASE_NAME &>/dev/null; do
    sleep 3
done

if [ ! -f "/var/www/html/index.html" ]; then

	wp core download --allow-root
	wp config create --dbname=$WP_DATABASE_NAME --dbuser=$WP_DATABASE_USER --dbpass=$WP_DATABASE_PASSWORD --dbhost=$MARIADB_ROOT_HOST --dbcharset=$MARIADB_CHARSET --dbcollate=$MARIADB_COLLATION --allow-root
	wp core install --url=$DOMAIN_NAME --title=$WP_TITLE --admin_user=$WP_ADMIN_USERNAME --admin_password=$WP_ADMIN_PASSWORD --admin_email=$WP_ADMIN_EMAIL --skip-email --allow-root
	wp user create $WP_USERNAME $WP_EMAIL --role=author --user_pass=$WP_PASSWORD --allow-root

fi

echo "Wordpress started on :9000"
/usr/sbin/php-fpm7 -F -R
