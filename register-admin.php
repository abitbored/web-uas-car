<?php

require('function.php');

if (isset($_POST['submit'])) {
    register($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
    <title>Admin Register</title>
</head>
<!-- <header>
    <h1>Toko Abi</h1>
</header> -->

<body>
    <header class="logo">
        <a href="home.php">
            <h1>Abi's Autoshop</h1>
        </a>
    </header>

    <nav class="navbar">
        <ul>
            <li><a class="active" href="home.php">Home</a></li>
            <li><a class="active" href="catalog.php">Catalog</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
    </nav>

    <div class="register-content">
        <h2>Admin Register</h2>
        <div class="register-form-container">
            <form method="POST" action="" enctype="multipart/form-data" autocomplete="off">
                <label class="form-label">Username</label>
                <input type="text" class="form-input" name="username" required>
                <label class="form-label">Admin Name</label>
                <input type="text" class="form-input" name="name" required>
                <label class="form-label">Password</label>
                <input type="password" class="form-input" name="password" required>
                <label class="form-label">Re-enter Password</label>
                <input type="password" class="form-input" name="password-confirm" required>
                <input type="submit" class="form-submit" name="submit" value="Register">
            </form>
        </div>
    </div>
</body>

</html>