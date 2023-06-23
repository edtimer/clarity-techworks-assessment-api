#!/bin/sh

cd /app  
php artisan migrate:fresh --seed
# will need to replace my hardcoded pport with an env variable $APP_PORT
php artisan serve --host=0.0.0.0 --port=8000
