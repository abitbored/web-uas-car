<?php
include('auth-session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
    <title>Admin Dashboard</title>
</head>

<body>
    <header class="logo">
        <a href="dashboard-admin.php"><h1>Abi's Autoshop</h1></a>
    </header>

    <nav class="navbar">
        <ul>
            <li><a class="active" href="dashboard-admin.php">Home</a></li>
            <li><a class="active" href="add-item.php">Add Item</a></li>
            <li><a class="active" href="manage-item.php">Manage Item</a></li>
            <li><a class="active" href="manage-admin.php">Manage Admin</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <p>welcome <?php echo $_SESSION['name']; ?></p>
</body>

</html>