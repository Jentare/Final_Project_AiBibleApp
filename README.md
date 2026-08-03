// Jennifer Frei
/ CS85 PHP
// FINAL PROJECT


# Daily Bible Reading & AI Prayer Journal

A full-stack Laravel application that provides daily scripture reading paired with an AI-powered prayer journal to help users reflect on daily passage readings.

---

## Project Descriptio
This application allows users to follow a sequential daily Bible reading plan. It dynamically pulls scripture text using the **ESV API** and allows users to record personal prayer journal entries. Using the **OpenAI API**, the system analyzes the scripture context alongside the user's entry to generate personalized reflection insights and encouragement.

## Features
* **Sequential Daily Readings:** Route and database-driven tracking of daily readings by day number.
* **Dynamic Scripture Retrieval:** Integration with the ESV API to automatically load passage text for each day's reading.
* **AI Prayer Insight Generator:** Integration with OpenAI API to analyze user reflections against the daily passage text and generate meaningful insights.
* **Form Validation & Error Handling:** Robust Laravel request validation and dynamic fallbacks for missing data or API responses.

---

## Tech Stack
* **Framework:** Laravel 13
* **Language:** PHP 8.4
* **Database:** MySQL
* **APIs:** OpenAI API, ESV Scripture API

---

## Setup Steps

### Prerequisites
* PHP >= 8.4
* Composer
* MySQL Database
* OpenAI API Key
* ESV API Key

# Installation
Clone the repository to your local machine using git clone followed by your repository URL, then navigate into the project directory.

Install all PHP dependencies by running the composer install command in your terminal.

Set up your environment variables by copying the .env.example file to create a new .env file.

Configure your .env file by updating your database credentials (name, username, password) and adding your OPENAI_API_KEY and ESV_API_KEY values.

Generate your application encryption key by running the artisan key:generate command.

Run your database migrations and seeders using the artisan migrate --seed command to set up your database tables.

Start the local development server by running php artisan serve and access the application in your browser at http://127.0.0.1:8000.






<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
