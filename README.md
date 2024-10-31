# Notes Web Application

This project is a simple web application for creating, viewing, and deleting notes. Built using PHP and a custom MVC structure, it incorporates concepts such as a router, service container, and middleware for handling guest access. The app uses MySQL for data storage and leverages Composer for autoloading dependencies.

## Features
- **User Authentication**: Access control based on session state, using guest middleware to restrict pages.
- **Note CRUD Operations**: Users can create, view, and delete notes.
- **Simple MVC Architecture**: Organized structure with controllers, views, and models.
- **Service Container**: Manages dependencies, reducing duplication and improving code modularity.

## Prerequisites
- PHP 7.4+
- MySQL
- Composer

## Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/your-username/your-repo.git
   cd your-repo
   ```

2. **Install dependencies using Composer:**:
```bash
composer install
 ```


3. **Set up the database:**:

Create a MySQL database, e.g., myapp.
Import any SQL migrations or tables if provided.
Update the config.php file with your database credentials:
```bash
return [
    'database' => [
        'host' => 'localhost',
        'port' => 3306,
        'dbname' => 'myapp',
        'charset' => 'utf8mb4',
        'username' => 'your_db_user',
        'password' => 'your_db_password'
    ]
];
```
4. **Run the application**:
```bash
php -S localhost:8000 -t public
 ```



   
