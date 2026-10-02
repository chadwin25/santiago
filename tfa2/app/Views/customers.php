<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
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
        <h1>Customers</h1>

        <?php foreach ($customers as $customer): ?>

            <div class="card">
                <p><strong>Full Name:</strong> <?= esc($customer['full_name']) ?></p>
                <p><strong>Email:</strong> <?= esc($customer['email']) ?></p>
                <p><strong>Phone:</strong> <?= esc($customer['phone']) ?></p>
            </div>

        <?php endforeach; ?>
    </div>

</body>
</html>
