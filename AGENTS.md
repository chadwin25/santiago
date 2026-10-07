# Repository Guidelines

## Project Structure & Module Organization

This repository contains two CodeIgniter 4 applications:

- `tfa2/` is the current database-backed application and the primary development target.
- `tfa1/` is the earlier array-based version kept for reference.

Within each application, PHP source is in `app/`, public assets and the web entry point are in `public/`, tests are in `tests/`, and runtime files belong in `writable/`. TFA2 database setup is documented in `tfa2/database/santiago_tfa2.sql`.

## Build, Test, and Development Commands

Run commands from the application directory, normally `tfa2/`:

```powershell
composer install                 # Install PHP dependencies
php spark serve                  # Start CodeIgniter's local server
composer test                    # Run PHPUnit tests
php spark routes                 # List registered routes
```

For the XAMPP setup, start Apache and MySQL, import the TFA2 SQL dump, configure the local `.env`, and open `http://localhost/santiago/tfa2/`.

## Coding Style & Naming Conventions

Use four spaces for PHP and CSS indentation. Follow CodeIgniter conventions: PascalCase class names, one class per file, and matching filenames such as `CustomerModel.php` and `Customers.php`. Keep controllers focused on request handling, models focused on database access, and views focused on presentation. Escape rendered user data with `esc()`. Use descriptive CSS class names in kebab-case and keep shared colors and spacing in `:root` variables.

## Testing Guidelines

Tests use PHPUnit 10 and CodeIgniter's test utilities. Test files belong under `tests/unit/`, `tests/database/`, or `tests/session/` and use descriptive `*Test.php` names. Run `composer test` before submitting changes. Database tests use the SQLite test connection and require the PHP `sqlite3` extension.

## Commit & Pull Request Guidelines

Recent commits use concise imperative descriptions, for example: `Load customer accounts from the database` and `Redesign TFA2 pages with dark theme`. Keep commits focused and use a similar style. Pull requests should explain the change, identify the affected application, include testing results, and attach screenshots for visual changes. Do not commit `.env` files or credentials.

## Configuration & Security

Keep local database credentials in `tfa2/.env`; use the repository SQL dump for reproducible sample data. Never place passwords or production configuration in tracked PHP, SQL, or documentation files.
