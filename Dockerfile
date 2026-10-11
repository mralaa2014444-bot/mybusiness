FROM richarvey/nginx-php-fpm:latest

COPY . .

ENV APP_ENV=production
ENV APP_DEBUG=false
ENV LOG_CHANNEL=stderr
ENV WEBROOT=/var/www/html/public

CMD sh -c "composer install --no-dev --optimize-autoloader --no-interaction && php artisan migrate --force && exec /start.sh" 
