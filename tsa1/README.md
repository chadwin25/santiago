# CodeIgniter POS Accounts — TFA2

A CodeIgniter 4 application for the Web System Technologies Technical Formative Assessment 2: **From Arrays to a Real Database**.

This project continues the TFA1 application. Its Customers and Users pages now retrieve records from a MySQL/MariaDB database through CodeIgniter models instead of static PHP arrays.

## Features

- Home, About, Customers, and Users pages with navigation links
- Customer and user records stored in separate database tables
- `CustomerModel` and `UserModel` for retrieving records
- Five sample records in each table
- An SQL export containing the tables and sample records

## Technologies

- PHP 8.2
- CodeIgniter 4
- Composer
- MySQL/MariaDB
- HTML and CSS
- Git and GitHub

## Project Structure

```text
tfa2/
├── app/
│   ├── Controllers/
│   │   ├── Customers.php
│   │   ├── Pages.php
│   │   └── Users.php
│   ├── Models/
│   │   ├── CustomerModel.php
│   │   └── UserModel.php
│   └── Views/
│       ├── pages/
│       │   ├── about.php
│       │   └── landing.php
│       ├── customers.php
│       └── users.php
├── database/
│   └── santiago_tfa2.sql
├── public/
│   └── style.css
├── composer.json
└── README.md
```

## Requirements

To run the application locally, install:

- XAMPP with Apache, PHP, and MySQL/MariaDB
- Composer
- Git, if you plan to clone the repository

## Local Setup

### 1. Get the project

From `C:\xampp\htdocs`, clone the repository:

```powershell
git clone https://github.com/chadwin25/santiago.git
cd santiago\tfa2
```

If you already have the project in `C:\xampp\htdocs\santiago\tfa2`, open that folder instead.

### 2. Install PHP dependencies

Run this command inside the `tfa2` folder:

```powershell
composer install
```

### 3. Start the local services

Start **Apache** and **MySQL** in the XAMPP Control Panel.

### 4. Create and import the database

1. Open `http://localhost/phpmyadmin`.
2. Create a database named `santiago_tfa2`.
3. Select the new database, then click **Import**.
4. Choose `tfa2/database/santiago_tfa2.sql` and click **Import**.
5. Check that `customers` and `users` each contain five records.

The SQL export contains the table structure and records. Create the `santiago_tfa2` database before importing because the export does not include a `CREATE DATABASE` command.

### 5. Configure the application

Create a file named `.env` in the root of `tfa2`, alongside `composer.json`. Set these values for the local XAMPP setup:

```ini
CI_ENVIRONMENT = development

app.baseURL = 'http://localhost/santiago/tfa2/'

database.default.hostname = localhost
database.default.database = santiago_tfa2
database.default.username = root
database.default.password = ''
database.default.DBDriver = MySQLi
database.default.port = 3306
```

If your MySQL account uses a different username, password, or port, use your local values. The `.env` file is local configuration and is not included in the repository.

### 6. Open the application

With Apache and MySQL running, visit:

```text
http://localhost/santiago/tfa2/
```

| Page | Local URL |
| --- | --- |
| Home | `http://localhost/santiago/tfa2/` |
| About | `http://localhost/santiago/tfa2/about` |
| Customers | `http://localhost/santiago/tfa2/customers` |
| Users | `http://localhost/santiago/tfa2/users` |

You can also check the database connection from the `tfa2` folder:

```powershell
& "C:\xampp\php\php.exe" spark db:table --show
```

A working connection lists the `customers` and `users` tables.

## How the Database Pages Work

The Customers route calls the `Customers` controller. That controller uses `CustomerModel` to retrieve records from the `customers` table and passes them to `customers.php`.

The Users route follows the same flow through the `Users` controller, `UserModel`, and `users.php` view. The user page displays usernames and full names. The TFA2 `users` table does not contain a role column.

## Author

**Sherwin Adrian A. Santiago**  
FEU Institute of Technology  
BSIT CST — Cyber Security