- docker-compose build

- docker-compose up -d

- docker-compose exec app-ebike24 composer install

- cp .env.example .env

- docker-compose exec app-ebike24 php artisan key:generate

- docker-compose exec app-ebike24 php artisan migrate