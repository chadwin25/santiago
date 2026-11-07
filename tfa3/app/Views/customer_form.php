<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Customer | Santiago POS</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
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
        <p class="eyebrow">Customer accounts / New customer</p>
        <h1>Add a <span class="accent-text">customer.</span></h1>
        <p class="lead">Enter the customer details below.</p>

        <form class="form-card" method="post" action="<?= base_url('customers/create') ?>">
            <?= csrf_field() ?>

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

            <div class="form-field">
                <label for="email">Email <span aria-hidden="true">*</span></label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    maxlength="100"
                    value="<?= esc(old('email') ?? '') ?>"
                    required
                    aria-invalid="<?= isset($validationErrors['email']) ? 'true' : 'false' ?>"
                >
                <?php if (isset($validationErrors['email'])): ?>
                    <p class="form-error"><?= esc($validationErrors['email']) ?></p>
                <?php endif; ?>
            </div>

            <div class="form-field">
                <label for="phone">Phone (optional)</label>
                <input
                    type="text"
                    id="phone"
                    name="phone"
                    maxlength="20"
                    value="<?= esc(old('phone') ?? '') ?>"
                >
                <?php if (isset($validationErrors['phone'])): ?>
                    <p class="form-error"><?= esc($validationErrors['phone']) ?></p>
                <?php endif; ?>
            </div>

            <button class="button button-primary" type="submit">Save customer</button>
            <a class="button" href="<?= base_url('customers') ?>">Cancel</a>
        </form>
    </main>

</body>
</html>