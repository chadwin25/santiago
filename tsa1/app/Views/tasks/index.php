<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Task List
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<p class="eyebrow">All scheduled work</p>
<h1>Complete task <span class="accent-text">list.</span></h1>
<p class="lead">
    Every task in the database, ordered by its scheduled date.
</p>

<?php if (empty($tasks)): ?>
    <section class="info-panel">
        <h2>No tasks found</h2>
        <p>There are no tasks in the task list.</p>
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