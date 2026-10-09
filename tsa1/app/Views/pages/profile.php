<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Profile
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<p class="eyebrow">Account overview</p>
<h1>Your profile<span class="accent-text">.</span></h1>

<?php if (empty($user)): ?>
    <section class="empty-panel">
        <h2>No user found</h2>
        <p>The users table does not contain a demo user record.</p>
    </section>
<?php else: ?>
    <section class="profile-card">
        <img
            class="profile-avatar"
            src="<?= base_url('profile.jpg') ?>"
            alt="Profile photo of <?= esc($user['full_name']) ?>"
            width="112"
            height="112"
            style="display: block; width: 112px; height: 112px; object-fit: cover; border-radius: 20px;"
        >

        <div>
            <p class="eyebrow">Demo user</p>
            <h2><?= esc($user['full_name']) ?></h2>
            <p>Your account information in the Tasks for Today system.</p>
        </div>
    </section>

    <div class="profile-details">
        <div class="profile-detail">
            <strong>Username</strong>
            <span><?= esc($user['username']) ?></span>
        </div>

        <div class="profile-detail">
            <strong>Email address</strong>
            <span><?= esc($user['email']) ?></span>
        </div>

        <div class="profile-detail">
            <strong>Account created</strong>
            <span><?= esc(date('F j, Y', strtotime($user['created_at']))) ?></span>
        </div>

        <div class="profile-detail">
            <strong>Account type</strong>
            <span>Demo profile</span>
        </div>
    </div>
<?php endif; ?>
<?= $this->endSection() ?>