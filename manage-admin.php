<?php
include('auth-session.php');
include('function.php');

if (isset($_POST['logout'])) {
    logout();
}
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
            </ul>F
        </div>
    </nav>

    <div class="table-container">
        <table class="table">
            <thead class="table-head">
                <th>Username</th>
                <th>Name</th>
                <th>Password</th>
                <th>Action</th>
            </thead>
            <tbody class="table-body">

            </tbody>
        </table>
    </div>
</body>

</html>