<?php
include('auth-session.php');
include('function.php');

if (isset($_POST['logout'])) {
    logout();
}

if (isset($_POST['update']) && empty($_FILES['imgName']['name'])) {
    editItem($_POST);
}
if (isset($_POST['update']) && !empty($_FILES['imgName']['name'])) {
    editItem($_POST, $_FILES);
}

$id = $_GET['id'];
$product = fetch("select * from product where id = '$id'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
    <title>Edit Item</title>
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
                <li><a id="current" class="nav-button" href="dashboard-admin.php">Home</a></li>
                <li><a class="nav-button" href="add-item.php">Add Item</a></li>
                <li><a class="nav-button" href="manage-item.php">Manage Item</a></li>
                <li><a class="nav-button" href="manage-admin.php">Manage Admin</a></li>
                <li><a class="nav-button" href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <div class="add-item-content">
        <h2>Edit Product</h2>
        <div class="add-item-form-container">
            <form method="POST" action="" enctype="multipart/form-data" autocomplete="off">
                <label class="form-label">Brand</label>
                <input type="text" class="form-input" name="brand" value="<?php echo $product['brand']; ?>" required>
                <label class="form-label">Year</label>
                <input type="text" class="form-input" name="year" value="<?php echo $product['year']; ?>" required>
                <label class="form-label">Kilometer</label>
                <input type="text" class="form-input" name="kilometer" value="<?php echo $product['kilometer']; ?>">
                <label class="form-label">Picture</label>
                <input type="file" class="form-input" name="imgName" accept="image/*">
                <label class="form-label">Description</label>
                <textarea name="description" id="desc" maxlength="4096" required><?php echo $product['description']; ?></textarea>
                <input type="hidden" name="imgName" value="<?php echo $product['imgName']; ?>">
                <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                <input type="submit" class="form-submit" name="update" value="Update Product">
            </form>
        </div>
    </div>
</body>

</html>