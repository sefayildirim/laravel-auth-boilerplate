1- `composer install`

2- `npm install`

3- `npm run build`

4- `php artisan optimize:clear`

5- `php artisan migrate`


laravel fortify & bootstrap auth

laravel new example-app
cd example-app
composer require laravel/fortify
php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"
php artisan migrate
composer require laravel/ui
php artisan ui bootstrap --auth
npm install
npm run build
