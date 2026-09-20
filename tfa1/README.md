# My CodeIgniter Application

## Description

This is a simple CodeIgniter 4 web application created for the Web System Technologies technical formative assessment.

The application contains four pages:

* Home
* About
* Customers
* Users

The Customers and Users pages use static PHP arrays to display sample records. No database is used in this activity.

## Technologies Used

* PHP 8.2
* CodeIgniter 4
* Composer
* HTML
* Git and GitHub

## Requirements

Before running the project, make sure you have:

* PHP 8.2 or higher
* Composer
* Git

## Installation

1. Clone the repository:

```bash
git clone https://github.com/chadwin25/my-project.git
```

2. Open the project folder:

```bash
cd my-project
```

3. Install the project dependencies:

```bash
composer install
```

4. Create the `.env` file from the provided `env` file and configure the base URL:

```text
app.baseURL = 'http://localhost:8080/'
```

## Running the Application

Inside the project folder, run:

```bash
php spark serve
```

Then open the following address in a web browser:

```text
http://localhost:8080
```

## Pages

| Page      | URL          |
| --------- | ------------ |
| Home      | `/`          |
| About     | `/about`     |
| Customers | `/customers` |
| Users     | `/users`     |

The pages also contain navigation links that allow users to move between the four pages.

## Project Structure

Important project files include:

```text
app/
├── Controllers/
│   ├── Pages.php
│   ├── Customers.php
│   └── Users.php
│
└── Views/
    ├── pages/
    │   ├── landing.php
    │   └── about.php
    ├── customers.php
    └── users.php
```

## Author

Sherwin Adrian A. Santiago

FEU Institute of Technology
BSIT CST - Cyber Security
