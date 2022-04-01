### About

---------

A Cloud based blood banks management system (stocks, orders, etc). And facilitate access (research) of bloodstock to hospitals and clinics via an intuitive online search (search engine) portal.

## Installation

    git clone https://github.com/enigma972/lobiko
    cd lobiko
    composer install

Configuration

    cp .env .env.local

edit database url

    DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7&charset=utf8mb4"
create database, execute migrations and load fixtures

    php bin/console doctrine:database:create
    php bin/console doctrine:migrations:migrate
    php bin/console doctrine:fixtures:load
## Add Google Maps Api Key

    #assets/js/map.js
    ...
    const loader =  new  Loader({
	    apiKey:  "YOUR_API_KEY",
    });
	...


webpack encore
    npm i
    npm run build


Help: https://symfony.com/doc/5.4/deployment.html