<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Detail User 0046</h1>
        <?php if ($user): ?>
            <ul class="list-group">
                <li class="list-group-item"><strong>ID:</strong> <?php echo htmlspecialchars($user['id']); ?></li>
                <li class="list-group-item"><strong>Name:</strong> <?php echo htmlspecialchars($user['name']); ?></li>
                <li class="list-group-item"><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></li>
            </ul>
            <a href="index.php" class="btn btn-primary mt-3">Kembali</a>
        <?php else: ?>
            <p class="text-danger">Gak ketemu bang.</p>
            <a href="index.php" class="btn btn-primary mt-3">Kembali</a>
        <?php endif; ?>
    </div>
</body>
</html>
