<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<h1 align="center">
  Teman Belajar (Online Platform Learning System)
  <br>
</h1>            


# Introduce

Teman Belajar is an online learning platform where students can access material easily and get the latest learning materials

# Overview

![Landing](public/img/preview-landing-page.png)
![Login](public/img/preview-login.png)
![Admin](public/img/preview-admin.png)

## Prerequiste

- [Composer](https://getcomposer.org/) - Download and Install Composer

### Installation

Install the dependencies and start the server.

```sh
$ git clone https://gitlab.com/zainal21/e-course-learning-system-laravue/
$ cd e-course-learning-system-laravue/
$ composer install
$ cp .env.example to .env
$ change setting for database & generate key with php artisan key:generate or upload your .sql file to your DBMS
$ Call Action to Migrate Database & seeder with php artisan migrate --seed
$ php artisan serve
```

## 👤 Author

-   Muhamad Zainal Arifin

## 📝 License

Copyright © 2020 Muhamad Zainal Arifin.
This project is MIT licensed.
