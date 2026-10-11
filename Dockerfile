FROM richarvey/nginx-php-fpm:latest

COPY . .

ENV APP_ENV=production
ENV APP_DEBUG=false
ENV LOG_CHANNEL=stderr
ENV WEBROOT=/var/www/html/public
ENV COMPOSER_MEMORY_LIMIT=-1
ENV COMPOSER_PROCESS_TIMEOUT=900

CMD sh -c "composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist && php artisan migrate --force --no-interaction; exec /start.sh"
