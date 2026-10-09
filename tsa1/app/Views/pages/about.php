<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Santiago POS</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>?v=2">
</head>
<body>

    <nav>
        <a class="site-brand" href="<?= base_url() ?>">SANTIAGO / POS</a>

        <div class="nav-links">
            <a href="<?= base_url() ?>">Home</a>
            <a href="<?= base_url('about') ?>" aria-current="page">About</a>
            <a href="<?= base_url('customers') ?>">Customers</a>
            <a href="<?= base_url('users') ?>">Users</a>
        </div>
    </nav>

    <main class="container">
        <p class="eyebrow">About the project</p>
        <h1>A small project with a <span class="accent-text">real database.</span></h1>

        <p class="lead">
            Santiago POS is a CodeIgniter 4 learning project for Web System
            Technologies. This TFA2 version builds on TFA1 by replacing the
            customer and user arrays with records stored in MySQL.
        </p>

        <div class="two-column">
            <section class="info-panel">
                <h2>What it shows</h2>
                <p>
                    The Customers and Users pages retrieve records through
                    separate CodeIgniter models. The controllers pass those
                    records to views, which display them as account cards.
                </p>
            </section>

            <section class="info-panel">
                <h2>What I learned</h2>
                <p>
                    This activity connects routes, controllers, models, views,
                    and a database. It also shows how a page can keep much of
                    its original layout when its source of data changes.
                </p>
            </section>
        </div>

        <section aria-labelledby="questions-heading">
            <div class="section-heading">
                <p class="eyebrow">Take a closer look</p>
                <h2 id="questions-heading">How does it work?</h2>
            </div>

            <div class="disclosure-list">
                <details class="info-disclosure">
                    <summary>Where do the account records come from?</summary>
                    <p>
                        They come from the customers and users tables in MySQL.
                        Each page's controller asks its model for the records
                        and passes them to a view.
                    </p>
                </details>

                <details class="info-disclosure">
                    <summary>Why are user roles not displayed?</summary>
                    <p>
                        The required TFA2 users table contains an ID, username,
                        full name, and creation date. It does not contain a role
                        field, so the Users page displays the available account
                        information.
                    </p>
                </details>
            </div>
        </section>
    </main>

</body>
</html>