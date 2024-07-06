# CodeIgniter 4 Tailwind Starter Template

## How to Run

1. Copy the `.env` file to `.env` and tailor it for your app, specifically the `baseURL` and any database settings.
2. Run `composer install` to install all required packages.
3. Run `npm install` to install all required dependencies.
4. Run `php spark migrate` to run database migrations.
5. Run `php spark db:seed RoleSeeder` to seed the role data.
6. Run `npm run dev` and `php spark serve` to run this project.

## Features

- Simple authentication (login, register, filter)
- Simple admin dashboard
- Manage profile

## Add Views

A sample structure of a view can be seen in `app/Views/pages/sample_page.php`.

## Add Other Components

This project uses Material Tailwind. You can visit the official documentation [here](https://www.material-tailwind.com/docs/html/).
