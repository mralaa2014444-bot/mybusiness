FROM richarvey/nginx-php-fpm:latest

COPY . .

ENV APP_ENV=production
ENV APP_DEBUG=false
ENV LOG_CHANNEL=stderr
ENV WEBROOT=/var/www/html/public

CMD php artisan migrate --force && /start.sh
