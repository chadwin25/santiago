<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($this->renderSection('title')) ?> | Tasks for Today</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>?v=2">
    <link rel="stylesheet" href="<?= base_url('tsa1.css') ?>?v=1">
</head>
<body>
    <header class="app-header">
        <nav>
            <a class="app-brand" href="<?= base_url() ?>">
                <span class="app-brand-mark">T</span>
                <span class="app-brand-copy">
                    <strong>TASKS / TODAY</strong>
                    <small>Daily task management</small>
                </span>
            </a>

            <div class="nav-links">
                <a href="<?= base_url() ?>">Today</a>
                <a href="<?= base_url('tasks') ?>">Task List</a>
                <a href="<?= base_url('profile') ?>">Profile</a>
                <a href="<?= base_url('about') ?>">About</a>
            </div>
        </nav>
    </header>

    <main class="container app-main">
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="app-footer">
        IT0049 · Web System Technologies · Tasks for Today Management System
    </footer>
</body>
</html>