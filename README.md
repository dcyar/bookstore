# BOOKSTORE
> Simple e-commerce of books

#

> View [video demo project](https://youtu.be/rstvLyTOW-0)

## Made with
- [php >= 7.3](https://www.php.net/)
- [laravel 8.12](https://laravel.com)
- [spatie/laravel-medialibrary 8.0.0](https://docs.spatie.be/laravel-medialibrary/v7/introduction/)

## Features
- Admin Panel (Users, Roles, Plans, Authors, Books)
- User Wallet (user can buy credits)
- User Library

## Installation
- Check for requirements [laravel](https://laravel.com/docs/8.x/installation#server-requirements)

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

# Access to project in your browser
http://localhost:8000

# Admin account
homero@mail.com
password
```


#
> Thanks for your visit.

- Twitter: [@dcyar_](https://twitter.com/dcyar_)
