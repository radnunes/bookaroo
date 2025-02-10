# Bookaroo

**Bookaroo** is a Laravel-based web application for managing books and authors, along with user authentication and role-based access. This project demonstrates the use of Laravel routes, controllers, middleware, and views for a simple book management system.

## Features

- **Book Management**: Allows users to view a list of books and detailed information about each book.
- **Author Management**: Allows users to view a list of authors and their details.
- **Role-based Authentication**: Different access levels for regular users (clients) and admins.
- **User Registration & Login**: Users can register, login, and manage their sessions.

## Technologies Used

- **Laravel 8.x**: PHP framework used for the back-end.
- **Blade**: Laravel's templating engine for rendering views.
- **Middleware**: Used to enforce role-based access control.

## Setup & Installation

### Prerequisites

Make sure you have the following installed:

- PHP >= 7.3
- Composer
- Laravel 8.x
- MySQL or another database supported by Laravel

### Installation Steps

1. Clone the repository:
   ```bash
   git clone https://github.com/radnunes/bookaroo.git
   ```

2. Navigate to the project directory:
   ```bash
   cd bookaroo
   ```

3. Install the required dependencies using Composer:
   ```bash
   composer install
   ```

4. Set up your `.env` file:
   Copy `.env.example` to `.env` and update the database connection details.

   ```bash
   cp .env.example .env
   ```

5. Generate the application key:
   ```bash
   php artisan key:generate
   ```

6. Run the database migrations:
   ```bash
   php artisan migrate
   ```

7. Start the Laravel development server:
   ```bash
   php artisan serve
   ```

Now you can access the application at `http://127.0.0.1:8000`.

## Routes Overview

### Home
- `/`: Displays the home page.

### Book Routes
- `/books`: Displays a list of all books.
- `/books/{id}`: Displays the details of a specific book.

### Author Routes
- `/authors`: Displays a list of all authors.
- `/authors/{id}`: Displays the details of a specific author.

### Authentication & User Management
- `/register`: Registers a new user.
- `/login`: Logs in a user.
- `/logout`: Logs out the user.

### Admin Routes
- `/admin/books`: Admins can manage (create, update, delete) books.
- `/admin/authors`: Admins can manage (create, update, delete) authors.

### Client Routes
- `/clients/logout`: Clients can log out of their account.

## Role-based Access

### Admin
Admins have access to:
- Manage books and authors.
- Log out users from the admin panel.

### Client
Clients have access to:
- View books and authors.
- Log out from the client panel.

## Controllers

The project includes the following controllers:

- **AuthorController**: Handles author-related requests.
- **BookController**: Handles book-related requests.
- **HomeController**: Displays the home page.
- **LoginController**: Handles login and logout logic.
- **UserController**: Manages user registration and account-related actions.

## License

This project is open-source and available under the [MIT License](LICENSE).

---

Let me know if you need any adjustments or if there's anything specific you'd like to add to the README!
