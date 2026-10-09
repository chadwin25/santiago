<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
About the System
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<p class="eyebrow">Project overview</p>
<h1>Small tasks.<br><span class="accent-text">Clearer days.</span></h1>

<p class="lead">
    The Tasks for Today Management System is an internal tool for viewing
    daily tasks, checking their status, and reviewing the complete schedule
    in one place.
</p>

<section aria-labelledby="features-heading">
    <div class="section-heading">
        <p class="eyebrow">Inside the system</p>
        <h2 id="features-heading">Four pages, one shared database</h2>
    </div>

    <div class="feature-grid">
        <a class="feature-card" href="<?= base_url() ?>">
            <span class="card-number">01 / DAILY VIEW</span>
            <h3>Today</h3>
            <p>
                Shows only tasks whose task date matches today's date, so the
                user can focus on the current day's work.
            </p>
        </a>

        <a class="feature-card" href="<?= base_url('tasks') ?>">
            <span class="card-number">02 / COMPLETE SCHEDULE</span>
            <h3>Task List</h3>
            <p>
                Displays every task in the database, ordered by its scheduled
                date.
            </p>
        </a>

        <a class="feature-card" href="<?= base_url('profile') ?>">
            <span class="card-number">03 / DEMO ACCOUNT</span>
            <h3>Profile</h3>
            <p>
                Displays the demo user's username, full name, and email address
                from the users table.
            </p>
        </a>
    </div>
</section>

<div class="two-column">
    <section class="info-panel">
        <p class="eyebrow">How a page works</p>
        <h2>From URL to information</h2>
        <p>
            A route maps the requested URL to a controller method. The
            controller asks the appropriate model for database records, then
            passes those records to a view for display.
        </p>
        <p>
            The Today and Task List pages use the TaskModel. The Profile page
            uses the UserModel.
        </p>
    </section>

    <section class="info-panel">
        <p class="eyebrow">Project details</p>
        <h2>Built for IT0049</h2>
        <p>
            This project applies the Model-View-Controller pattern and connects
            a CodeIgniter 4 application to a MySQL database.
        </p>
        <p>
            <strong>Developer:</strong> Sherwin Adrian A Santiago<br>
            <strong>Course:</strong> IT0049 Web System Technologies
        </p>
    </section>
</div>

<section class="info-panel" style="margin-top: 18px;">
    <p class="eyebrow">The data behind the pages</p>
    <h2>Two tables support the system</h2>
    <p>
        The <strong>tasks</strong> table stores each task's title, status,
        scheduled date, and creation date. The <strong>users</strong> table
        stores the demo user's account information. Both the daily view and
        full task list read from the same tasks table; they differ in which
        records they show.
    </p>
</section>
<?= $this->endSection() ?>