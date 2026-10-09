<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers | Santiago POS</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>?v=2">
</head>
<body>

    <nav>
        <a class="site-brand" href="<?= base_url() ?>">SANTIAGO / POS</a>

        <div class="nav-links">
            <a href="<?= base_url() ?>">Home</a>
            <a href="<?= base_url('about') ?>">About</a>
            <a href="<?= base_url('customers') ?>" aria-current="page">Customers</a>
            <a href="<?= base_url('users') ?>">Users</a>
        </div>
    </nav>

    <main class="container">
        <p class="eyebrow">Database / Customer accounts</p>
        <h1>Meet the <span class="accent-text">customers.</span></h1>
        <p class="lead">
            <?= count($customers) ?> customer records retrieved from the database.
        </p>

        <?php foreach ($customers as $customer): ?>
            <div class="card">
                <p><strong>Full Name:</strong> <?= esc($customer['full_name']) ?></p>
                <p><strong>Email:</strong> <?= esc($customer['email']) ?></p>
                <p><strong>Phone:</strong> <?= esc($customer['phone'] ?? 'Not provided') ?></p>
            </div>
        <?php endforeach; ?>
    </main>

</body>
</html>