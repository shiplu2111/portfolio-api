
# portfolio-api
This is a portfolio api with laravel and filament php 

## Installation

```bash
git clone https://github.com/shiplu2111/portfolio-api.git

```bash
cd portfolio-api

```bash
composer install

```bash
cp .env.example .env

```bash
php artisan key:generate

## Running the app

Create a database and update the .env file

```bash
php artisan migrate --seed

```bash
php artisan serve

Visit http://127.0.0.1:8000/shiplujs/login for login to the admin panel

 Username/Email: admin@shiplujs.com

 Password: password


Visit http://127.0.0.1:8000/api-docs for the API Documentation 

Note: Change canAccessPanel method in User Model 
        return str_ends_with($this->email, '@shiplujs.com'); to return str_ends_with($this->email, '@yourdomain.com');
Note: This is a personal project and is You should not use it for any commercial purpose
