# BOOKSTORE
> Simple e-commerce of books

#

> View [demo project](https://dcyar-bookstore.herokuapp.com/)

## Made with
- [php 7.2](https://www.php.net/)
- [laravel 6.5.2](https://laravel.com)
- [spatie/laravel-medialibrary 7.0.0](https://docs.spatie.be/laravel-medialibrary/v7/introduction/)

## Features
- Admin Panel (Users, Roles, Plans, Authors, Books)
- User Wallet (user can buy credits)
- User Library

## Installation
- Check for requirements [laravel](https://laravel.com/docs/6.x/installation#server-requirements)

```git
# Clone this repository in your root folder
git clone https://github.com/dcyar/bookstore.git 

# Install dependencies
componser install

# Navigate to the bookstore folder
cd bookstore

# Create file .env
cp .env.example .env

# Generate key
php artisan key:generate

# Generate symbolic link
php artisan storage:link

# Run migrations (tables and Seeders)
php artisan migrate --seed

# Create Server
php artisan serve

# Access project
http://localhost:8080

# Admin account
homero@mail.com
password
```


#
> Thanks for your visit.

- Twitter: [@dcyar_](https://twitter.com/dcyar_)