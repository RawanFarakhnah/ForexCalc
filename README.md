Sure! Here’s your README written in **Markdown (`.md`)** format so you can copy it directly:

````md
# Currency Exchange Pro

<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

<p align="center">
    <a href="https://github.com/laravel/framework/actions">
        <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
    </a>
</p>

## About the Project

**Currency Exchange Pro** is a professional currency exchange platform built with **Laravel**. It provides:

- Real-time exchange rates for major currencies
- A quick currency converter
- Historical data access (planned for future updates)
- Mobile-friendly, responsive design
- Secure and reliable data sourcing

This project is designed to demonstrate a robust full-stack Laravel application integrating APIs for live financial data.

## Features Implemented

- Home page with hero section and major currency rates
- Quick currency converter form
- Integration with external currency API service
- Blade templates with dynamic rendering
- Responsive UI using **Bootstrap 5**
- Font Awesome icons for visuals

## Screenshots

### Home Page
![Home Page](assets/home-page.png)

## Installation

1. Clone the repository:  
```bash
git clone https://github.com/RawanFarakhnah/currency-exchange-pro.git
````

2. Navigate to the project directory:

```bash
cd currency-exchange-pro
```

3. Install PHP dependencies:

```bash
composer install
```

4. Set up your `.env` file based on `.env.example` and configure database/API keys.

5. Run migrations:

```bash
php artisan migrate
```

6. Serve the project:

```bash
php artisan serve
```

7. Access the app in your browser: `http://127.0.0.1:8000`

## Usage

* Navigate to the homepage to see major currency rates.
* Use the **Quick Currency Converter** to convert amounts between supported currencies.
* Rates are fetched in real-time from the configured currency API.

## Tech Stack

* **Backend:** PHP, Laravel Framework
* **Frontend:** Blade Templates, Bootstrap 5, jQuery
* **APIs:** External Currency Exchange API
* **Version Control:** Git/GitHub

## Contributing

Contributions are welcome! Feel free to open issues or submit pull requests to improve the project.

## License

This project is open-sourced under the **MIT License**.
