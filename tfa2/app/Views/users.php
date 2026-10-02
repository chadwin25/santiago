<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users | Santiago POS</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>?v=2">
</head>
<body>

    <nav>
        <a class="site-brand" href="<?= base_url() ?>">SANTIAGO / POS</a>

        <div class="nav-links">
            <a href="<?= base_url() ?>">Home</a>
            <a href="<?= base_url('about') ?>">About</a>
            <a href="<?= base_url('customers') ?>">Customers</a>
            <a href="<?= base_url('users') ?>" aria-current="page">Users</a>
        </div>
    </nav>

    <main class="container">
        <p class="eyebrow">Database / User accounts</p>
        <h1>Meet the <span class="accent-text">users.</span></h1>
        <p class="lead">
            <?= count($users) ?> user records retrieved from the database.
        </p>

        <?php foreach ($users as $user): ?>
            <div class="card">
                <p><strong>Username:</strong> <?= esc($user['username']) ?></p>
                <p><strong>Full Name:</strong> <?= esc($user['full_name']) ?></p>
            </div>
        <?php endforeach; ?>
    </main>

</body>
</html>