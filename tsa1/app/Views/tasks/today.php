<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Today's Tasks
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<?php
$totalTasks = count($tasks);
$completedTasks = 0;
$pendingTasks = 0;

foreach ($tasks as $task) {
    $taskStatus = strtolower((string) $task['status']);

    if ($taskStatus === 'completed') {
        $completedTasks++;
    } elseif ($taskStatus === 'pending') {
        $pendingTasks++;
    }
}

$progress = $totalTasks > 0
    ? (int) round(($completedTasks / $totalTasks) * 100)
    : 0;
?>

<section class="page-intro">
    <div>
        <p class="eyebrow">Daily dashboard</p>
        <h1>Welcome to your <span class="accent-text">today.</span></h1>
        <p class="lead">
            A clear view of the work scheduled for today.
        </p>
    </div>

    <div class="date-badge">
        <?= esc(date('l, F j, Y')) ?>
    </div>
</section>

<section class="dashboard-stats" aria-label="Today's task summary">
    <article class="stat-card">
        <span class="stat-label">Today's tasks</span>
        <span class="stat-number"><?= esc((string) $totalTasks) ?></span>
    </article>

    <article class="stat-card">
        <span class="stat-label">Completed</span>
        <span class="stat-number"><?= esc((string) $completedTasks) ?></span>
    </article>

    <article class="stat-card">
        <span class="stat-label">Pending</span>
        <span class="stat-number"><?= esc((string) $pendingTasks) ?></span>
    </article>
</section>

<section class="progress-panel" aria-label="Task completion progress">
    <div class="progress-heading">
        <span>Today's progress</span>
        <span><?= esc((string) $progress) ?>%</span>
    </div>

    <div
        class="progress-track"
        role="progressbar"
        aria-valuenow="<?= esc((string) $progress) ?>"
        aria-valuemin="0"
        aria-valuemax="100"
        aria-label="Today's tasks completed"
    >
        <div class="progress-fill" style="width: <?= esc((string) $progress) ?>%"></div>
    </div>
</section>

<div class="section-title-row">
    <div>
        <p class="eyebrow">Your schedule</p>
        <h2>Tasks for today</h2>
    </div>

    <p class="section-note">
        <?= esc((string) $totalTasks) ?>
        <?= $totalTasks === 1 ? 'task' : 'tasks' ?> scheduled
    </p>
</div>

<?php if (empty($tasks)): ?>
    <section class="empty-panel">
        <h2>Your schedule is clear</h2>
        <p>There are no tasks scheduled for today.</p>
    </section>
<?php else: ?>
    <div class="task-grid">
        <?php foreach ($tasks as $index => $task): ?>
            <?php
            $status = strtolower((string) $task['status']);
            $statusClass = in_array($status, ['pending', 'completed'], true)
                ? $status
                : 'other';
            ?>

            <article class="task-card">
                <div class="task-card-top">
                    <span class="task-number">
                        TASK <?= esc(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)) ?>
                    </span>

                    <span class="status-pill status-pill--<?= esc($statusClass) ?>">
                        <?= esc($task['status']) ?>
                    </span>
                </div>

                <h3><?= esc($task['title']) ?></h3>

                <p>
                    <strong>Scheduled:</strong>
                    <?= esc($task['task_date']) ?>
                </p>
            </article>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<?= $this->endSection() ?>