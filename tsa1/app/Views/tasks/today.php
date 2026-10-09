<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Today's Tasks
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<p class="eyebrow">Daily dashboard</p>
<h1>Tasks for <span class="accent-text">today.</span></h1>
<p class="lead">
    Tasks scheduled for <?= esc(date('F j, Y')) ?>.
</p>

<?php if (empty($tasks)): ?>
    <section class="info-panel">
        <h2>No tasks scheduled</h2>
        <p>There are no tasks scheduled for today.</p>
    </section>
<?php else: ?>
    <div class="feature-grid">
        <?php foreach ($tasks as $task): ?>
            <article class="card">
                <p class="eyebrow"><?= esc($task['status']) ?></p>
                <h3><?= esc($task['title']) ?></h3>
                <p>
                    <strong>Task date:</strong>
                    <?= esc($task['task_date']) ?>
                </p>
            </article>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<?= $this->endSection() ?>