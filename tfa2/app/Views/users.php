<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>
<body>

    <nav>
        <a href="<?= base_url() ?>">Home</a>
        <a href="<?= base_url('about') ?>">About</a>
        <a href="<?= base_url('customers') ?>">Customers</a>
        <a href="<?= base_url('users') ?>">Users</a>
    </nav>

    <div class="container">
        <h1>Users</h1>

        <?php foreach ($users as $user): ?>

            <div class="card">
                <p><strong>Username:</strong> <?= esc($user['username']) ?></p>
                <p><strong>Full Name:</strong> <?= esc($user['full_name']) ?></p>
                <p><strong>Role:</strong> <?= esc($user['role']) ?></p>
            </div>

        <?php endforeach; ?>
    </div>

</body>
</html>
