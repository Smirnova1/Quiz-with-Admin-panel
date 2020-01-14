# Quiz v2.0

The Quiz is realized on Laravel 6 and MySQL.

#### Admin
email:admin@example.com

password:admin

#### User
email:user@example.com

password:user


## Official Documentation
Documentation for the framework can be found on the [Laravel documentation](https://laravel.com/)

## How to use:
###### For appropriate work of the program you need:

1. Create an empty Database `CREATE DATABASE yourdatabasename`
2. Run: `https://github.com/Smirnova1/Quiz-with-Admin-panel.git` 
3. Generate .env file `cp .env.example .env` (for Linux and MAC) `copy .env.example .env` (for Windows)
4. Run the commands `composer install`
5. Fill .env file:
    * `APP_KEY=` <p>for key generation `php artisan key:generate`</p>
    * Database:
     ```
        DB_DATABASE=yourdatabasename
        DB_USERNAME=yourusername
        DB_PASSWORD=yourpassword
      ```
6. Run the command  `php artisan migrate` to complete the database with tables. And also execute the command `php artisan db:seed` to autocomplete the database.
7. Run the command `npm install`, `npm run dev`

###### Use the command `php artisan serve` to start The Quiz on the local host.

