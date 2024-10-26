<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit User 0046</h1>
        <?php if ($user): ?>
            <form action="index.php?action=update&id=<?php echo $user['id']; ?>" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
                </div>
                <button type="submit" class="btn btn-success">Save</button>
                <a href="index.php" class="btn btn-secondary">Cancel</a>
            </form>
        <?php else: ?>
            <p class="text-danger">User gak ketemu bang</p>
            <a href="index.php" class="btn btn-primary">Kembali</a>
        <?php endif; ?>
    </div>
</body>
</html>
