<?php
include('auth-session.php');
include('function.php');

if (isset($_POST['logout'])) {
    logout();
}

if (isset($_POST['delete'])) {
    deleteProduct($_POST);
}

$productData = fetchProductData();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
    <title>Manage Item</title>
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

    <div class="table-container">
        <table class="table">
            <thead class="table-head">
                <th>Brand</th>
                <th>Year</th>
                <th>Kilometer</th>
                <th>Description</th>
                <th>Image</th>
                <th>Date Uploaded</th>
                <th>Action</th>
            </thead>
            <tbody class="table-body">
                <?php
                if (is_array($productData)) {
                    foreach ($productData as $data) {
                ?>
                        <tr>
                            <td><?php echo $data['brand']; ?></td>
                            <td><?php echo $data['year']; ?></td>
                            <td><?php echo $data['kilometer']; ?></td>
                            <td>
                                <pre><?php echo $data['description']; ?></pre>
                            </td>
                            <td>
                                <div class="img-data">
                                    <img src="img/<?php echo $data['imgName']; ?>" alt="<?php echo $data['brand']; ?>" style="width:100px;height:100px;">
                                </div>
                                <?php echo $data['imgName']; ?>
                            </td>
                            <td><?php echo $data['dateUploaded']; ?></td>
                            <td>
                                <a href="edit-product.php?id=<?php echo $data['id']; ?>" class="edit-btn">Edit</a>
                                <form action="" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                    <input type="hidden" name="imgName" value="<?php echo $data['imgName']; ?>">
                                    <input class="del-btn" type="submit" name="delete" value="Delete">
                                </form>
                            </td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td colspan="7"><?php echo $productData; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>