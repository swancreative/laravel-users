# Laravel-Users | A Laravel Users Management [Package](https://packagist.org/packages/swancreative/laravel-users)



## Introduction

A Users Management [Package](https://packagist.org/packages/swancreative/laravel-users) that includes all necessary routes, views, models, and controllers for a user management dashboard and associated pages for managing Laravels built in user scaffolding.
Built for Laravel 5.2, 5.3, 5.4, and 5.5+.

## Requirements

* [Laravel 5.2, 5.3, 5.4, and 5.5+](https://laravel.com/docs/installation)

   Example new project creation command:

    ```laravel new laravel-users-example```

* [Laravel Authentication Scaffolding](https://laravel.com/docs/authentication)

   Authentication installation commands:

    ```php artisan make:auth```
    ```php artisan migrate```

## Installation

1. From your projects root folder in terminal run:

    Laravel 5.5+ use:

    ```
        composer require swancreative/laravel-users
    ```

2. Register Package
* Laravel 5.5 and up
Uses package auto discovery feature, no need to edit the `config/app.php` file.

3. Register the dependencies aliases
* Laravel 5.5 and up
Uses package auto discovery feature, no need to edit the `config/app.php` file.

4. Publish the packages language files by running the following from your projects root folder:

    ```
        php artisan vendor:publish --tag=laravelusers
    ```

## Routes

* ```/users```
* ```/users/{id}```
* ```/users/create```
* ```/users/{id}/edit```

## Required Packages
(included in this package)

* [laravelcollective/html](https://packagist.org/packages/laravelcollective/html)

## License

Laravel-Users | A Laravel Users Management Package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
