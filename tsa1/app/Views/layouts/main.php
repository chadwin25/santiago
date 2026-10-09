<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($this->renderSection('title')) ?> | Tasks for Today</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>?v=3">
</head>
<body>
    <nav>
        <a class="site-brand" href="<?= base_url() ?>">TASKS / TODAY</a>

        <div class="nav-links">
            <a href="<?= base_url() ?>">Today</a>
            <a href="<?= base_url('tasks') ?>">Task List</a>
            <a href="<?= base_url('profile') ?>">Profile</a>
            <a href="<?= base_url('about') ?>">About</a>
        </div>
    </nav>

    <main class="container">
        <?= $this->renderSection('content') ?>
    </main>
</body>
</html>