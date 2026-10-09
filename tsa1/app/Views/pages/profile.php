<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Profile
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<p class="eyebrow">Demo account</p>
<h1>User <span class="accent-text">profile.</span></h1>

<?php if (empty($user)): ?>
    <section class="info-panel">
        <h2>No user found</h2>
        <p>The users table does not contain a demo user record.</p>
    </section>
<?php else: ?>
    <section class="info-panel">
        <h2><?= esc($user['full_name']) ?></h2>

        <p>
            <strong>Username:</strong>
            <?= esc($user['username']) ?>
        </p>

        <p>
            <strong>Email:</strong>
            <?= esc($user['email']) ?>
        </p>
    </section>
<?php endif; ?>
<?= $this->endSection() ?>