<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Getting Started

### Installation

1. Clone the repository

    ```sh
    git clone https://github.com/phpnajmul/blog.git
    ```

2. Copy the `.env.example` file to `.env`

    ```sh
    cp .env.example .env
    ```

   Update the `.env` file with your database credentials and other settings.

3. Install the dependencies

    ```sh
    composer install
    ```

4. Generate the application key

    ```sh
    php artisan key:generate
    ```

5. Run the migrations
    ```sh
    php artisan migrate
    ```
   
6. Run the project
    ```sh
    composer run dev
    ```
   
