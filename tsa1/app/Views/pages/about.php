<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
About
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<p class="eyebrow">About the project</p>
<h1>Tasks for <span class="accent-text">Today.</span></h1>

<p class="lead">
    The Tasks for Today Management System is a CodeIgniter 4 application
    that displays daily tasks and a complete task list using records from
    a MySQL database.
</p>

<div class="two-column">
    <section class="info-panel">
        <h2>What the system shows</h2>
        <p>
            The Welcome page displays tasks scheduled for today. The Task List
            page displays every task ordered by date. The Profile page displays
            the demo user's information.
        </p>
    </section>

    <section class="info-panel">
        <h2>Developer</h2>
        <p>
            This system was developed by
            <strong>Sherwin Adrian A Santiago</strong>
            for IT0049 Web System Technologies.
        </p>
    </section>
</div>
<?= $this->endSection() ?>