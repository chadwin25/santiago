<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
    
    <nav>
    <a href="/">Home</a> |
    <a href="/about">About</a> |
    <a href="/customers">Customers</a> |
    <a href="/users">Users</a>
    </nav>

    <h1>Users</h1>

    <?php foreach ($users as $user): ?>

        <p><strong>Username:</strong> <?= esc($user['username']) ?></p>
        <p><strong>Full Name:</strong> <?= esc($user['full_name']) ?></p>
        <p><strong>Role:</strong> <?= esc($user['role']) ?></p>

        <hr>

    <?php endforeach; ?>

</body>
</html>