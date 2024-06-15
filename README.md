<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## How to Use This Application

### Prerequisites

Before you begin, ensure you have met the following requirements:

-   A local server environment such as [Laragon](https://laragon.org/) or [XAMPP](https://www.apachefriends.org/index.html).
-   PHP 8.1 or above.
-   [Composer](https://getcomposer.org/) installed on your local machine.
-   [Node.js](https://nodejs.org/) installed on your local machine.

### Installation

Follow these steps to set up the project:

1. **Clone the repository:**

    ```bash
    git clone https://github.com/Ashraf1712/test-ashraf.git
    cd test-ashraf
    ```

2. **Install Composer dependencies:**

    ```bash
    composer install
    ```

3. **Install Node.js dependencies:**

    ```bash
    npm install
    ```

4. **Copy the `.env.example` file to `.env`:**

    ```bash
    cp .env.example .env
    ```

5. **Generate an application key:**

    ```bash
    php artisan key:generate
    ```

6. **Configure your `.env` file:**

    Open the `.env` file and update the necessary settings such as database connection, mail configuration, etc.

7. **Run database migrations:**

    ```bash
    php artisan migrate
    ```

8. **Seed the database (if applicable):**

    ```bash
    php artisan db:seed
    ```

9. **Build the front-end assets:**

    ```bash
    npm run dev
    ```

### Running the Application

Start your local development server:

1. **Using Artisan:**

    ```bash
    php artisan serve
    ```

    This will start the server at `http://127.0.0.1:8000`.

2. **Using Laragon or XAMPP:**

    Ensure your local server (Apache) is running. Place the project folder in the `www` directory (for XAMPP) or the appropriate directory for Laragon. Access the application in your web browser at the configured URL (e.g., `http://localhost/your-repository`).

### Additional Commands

-   **Compile assets for production:**

    ```bash
    npm run production
    ```

-   **Run tests:**

    ```bash
    php artisan test
    ```

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
