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
    <header>
        <div class="logo-container">
            <a href="home.php" class="logo">
                <span>AbibaCars</span>
            </a>
        </div>

        <nav class="navbar">
            <ul>
                <li><a class="nav-button" href="dashboard-admin.php">Home</a></li>
                <li><a id="current" class="nav-button" href="add-item.php">Add Item</a></li>
                <li><a class="nav-button" href="manage-item.php">Manage Item</a></li>
                <li><a class="nav-button" href="manage-admin.php">Manage Admin</a></li>
                <li><a class="nav-button" href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <div class="add-item-content">
        <h2>Add Item</h2>
        <div class="add-item-form-container">
            <form method="POST" action="" enctype="multipart/form-data" autocomplete="off">
                <input type="text" class="form-input-add" name="brand" required placeholder="Brand">
                <input type="text" class="form-input-add" name="year" required placeholder="Year">
                <input type="text" class="form-input-add" name="kilometer" placeholder="Kilometer">
                <label class="form-label">Picture</label><input type="file" id="pic" class="form-input-add" name="imgName" accept="image/*" required>
                <textarea name="description" id="desc" maxlength="4096" required placeholder="Description"></textarea>
                <input type="hidden" name="dateUploaded" value="<?php echo date("d/m/Y") ?>">
                <input type="submit" class="form-submit" name="add" value="Add Product">
            </form>
        </div>
    </div>
</body>

</html>