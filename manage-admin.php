<?php
include('auth-session.php');
include('function.php');

if (isset($_POST['logout'])) {
    logout();
}

if (isset($_POST['delete'])) {
    deleteAdmin($_POST);
}

$adminData = fetchAdminData();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
    <title>Manage Admin</title>
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
                <li><a class="nav-button" href="add-item.php">Add Item</a></li>
                <li><a class="nav-button" href="manage-item.php">Manage Item</a></li>
                <li><a id="current" class="nav-button" href="manage-admin.php">Manage Admin</a></li>
                <li><a class="nav-button" href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <div class="table-container">
        <table class="table">
            <thead class="table-head">
                <th>Name</th>
                <th>Username</th>
                <th>Password</th>
                <th>Action</th>
            </thead>
            <tbody class="table-body">
                <?php
                if (is_array($adminData)) {
                    foreach ($adminData as $data) {
                ?>
                        <tr>
                            <td><?php echo $data['name']; ?></td>
                            <td><?php echo $data['username']; ?></td>
                            <td><?php echo $data['password']; ?></td>
                            <td>
                                <form action="" method="POST">
                                    <input type="hidden" name="username" value="<?php echo $data['username']; ?>">
                                    <input class="del-btn" type="submit" name="delete" value="Delete">
                                </form>
                            </td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td colspan="4"><?php echo $adminData; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>