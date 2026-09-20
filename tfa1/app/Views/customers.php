<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
</head>
<body>
    
    <nav>
    <a href="/">Home</a> |
    <a href="/about">About</a> |
    <a href="/customers">Customers</a> |
    <a href="/users">Users</a>
    </nav>

    <h1>Customers</h1>

    <?php foreach ($customers as $customer): ?>

        <p><strong>Full Name:</strong> <?= esc($customer['full_name']) ?></p>
        <p><strong>Email:</strong> <?= esc($customer['email']) ?></p>
        <p><strong>Phone:</strong> <?= esc($customer['phone']) ?></p>

        <hr>

    <?php endforeach; ?>

</body>
</html>