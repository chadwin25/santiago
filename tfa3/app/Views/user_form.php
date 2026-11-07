<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User | Santiago POS</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
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
        <p class="eyebrow">User accounts / New user</p>
        <h1>Add a <span class="accent-text">user.</span></h1>
        <p class="lead">Enter the user details below.</p>

        <form class="form-card" method="post" action="<?= base_url('users/create') ?>">
            <?= csrf_field() ?>

            <div class="form-field">
                <label for="username">Username <span aria-hidden="true">*</span></label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    maxlength="50"
                    value="<?= esc(old('username') ?? '') ?>"
                    required
                    aria-invalid="<?= isset($validationErrors['username']) ? 'true' : 'false' ?>"
                >
                <?php if (isset($validationErrors['username'])): ?>
                    <p class="form-error"><?= esc($validationErrors['username']) ?></p>
                <?php endif; ?>
            </div>

            <div class="form-field">
                <label for="full_name">Full name <span aria-hidden="true">*</span></label>
                <input
                    type="text"
                    id="full_name"
                    name="full_name"
                    maxlength="100"
                    value="<?= esc(old('full_name') ?? '') ?>"
                    required
                    aria-invalid="<?= isset($validationErrors['full_name']) ? 'true' : 'false' ?>"
                >
                <?php if (isset($validationErrors['full_name'])): ?>
                    <p class="form-error"><?= esc($validationErrors['full_name']) ?></p>
                <?php endif; ?>
            </div>

            <button class="button button-primary" type="submit">Save user</button>
            <a class="button" href="<?= base_url('users') ?>">Cancel</a>
        </form>
    </main>

</body>
</html>