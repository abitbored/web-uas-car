<?php
include('auth-session.php');
include('function.php');

if (isset($_POST['logout'])) {
    logout();
}

if (isset($_POST['add'])) {
    addItem($_POST, $_FILES);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
    <title>Add Item</title>
</head>

<body>
    <header class="logo">
        <a href="dashboard-admin.php">
            <h1>Abi's Autoshop</h1>
        </a>
    </header>

    <nav class="navbar-container">
        <div class="nav-list">
            <ul>
                <li><a class="nav-button" href="dashboard-admin.php">Home</a></li>
                <li><a class="nav-button" href="add-item.php">Add Item</a></li>
                <li><a class="nav-button" href="manage-item.php">Manage Item</a></li>
                <li><a class="nav-button" href="manage-admin.php">Manage Admin</a></li>
                <li>
                    <form action="" method="POST"><input class="nav-button" type="submit" name="logout" value="Logout"></form>
                </li>
            </ul>
        </div>
    </nav>

    <div class="add-item-content">
        <h2>Admin Register</h2>
        <div class="add-item-form-container">
            <form method="POST" action="" enctype="multipart/form-data" autocomplete="off">
                <label class="form-label">Brand</label>
                <input type="text" class="form-input" name="brand" required>
                <label class="form-label">Year</label>
                <input type="text" class="form-input" name="year" required>
                <label class="form-label">Kilometer</label>
                <input type="text" class="form-input" name="kilometer">
                <label class="form-label">Picture</label>
                <input type="file" class="form-input" name="imgName" accept="image/*" required>
                <label class="form-label">Description</label>
                <textarea name="description" id="desc" maxlength="4096" required></textarea>
                <input type="submit" class="form-submit" name="add" value="Add Product">
            </form>
        </div>
    </div>
</body>

</html>