<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Santiago POS</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>?v=2">
</head>
<body>

    <nav>
        <a class="site-brand" href="<?= base_url() ?>">SANTIAGO / POS</a>

        <div class="nav-links">
            <a href="<?= base_url() ?>" aria-current="page">Home</a>
            <a href="<?= base_url('about') ?>">About</a>
            <a href="<?= base_url('customers') ?>">Customers</a>
            <a href="<?= base_url('users') ?>">Users</a>
        </div>
    </nav>

    <main class="container">
        <section class="hero">
            <div>
                <p class="eyebrow">Web System Technologies · TFA2</p>
                <h1>Accounts, now backed by <span class="accent-text">real data.</span></h1>

                <p class="lead">
                    Explore the customer and user accounts in this CodeIgniter POS
                    project. The records now come from a MySQL database instead
                    of temporary PHP arrays.
                </p>

                <div class="hero-actions">
                    <a class="button button-primary" href="<?= base_url('customers') ?>">
                        Explore customers
                    </a>
                    <a class="button" href="<?= base_url('users') ?>">
                        View users
                    </a>
                </div>
            </div>

            <div class="hero-panel">
                <p class="panel-label">How a page loads</p>
                <div class="flow-step"><span>01</span> Route receives the URL</div>
                <div class="flow-step"><span>02</span> Controller handles the request</div>
                <div class="flow-step"><span>03</span> Model reads the database</div>
                <div class="flow-step"><span>04</span> View displays the records</div>
            </div>
        </section>

        <section aria-labelledby="explore-heading">
            <div class="section-heading">
                <p class="eyebrow">Explore the project</p>
                <h2 id="explore-heading">Choose an account page</h2>
            </div>

            <div class="feature-grid">
                <a class="feature-card" href="<?= base_url('customers') ?>">
                    <span class="card-number">01 / CUSTOMER ACCOUNTS</span>
                    <h3>Customers</h3>
                    <p>Browse names, email addresses, and phone numbers stored in MySQL.</p>
                </a>

                <a class="feature-card" href="<?= base_url('users') ?>">
                    <span class="card-number">02 / USER ACCOUNTS</span>
                    <h3>Users</h3>
                    <p>View the usernames and full names retrieved by the User model.</p>
                </a>
            </div>
        </section>
    </main>

</body>
</html>