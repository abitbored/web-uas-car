<?php
require('connect.php');

function fetch($query)
{
    global $connect;

    $result = mysqli_query($connect, $query);

    return $resultRows = mysqli_fetch_assoc($result);
}

function fetchMany($tableName, $columnArr, $order, $sort)
{
    global $connect;

    if (empty($connect)) {
        return "Database connection error.";
    }

    if (empty($columnArr) || !is_array($columnArr)) {
        return "Column must be defined and in an indexed array!";
    }

    if (empty($tableName)) {
        return "Table parameter is empty!";
    }

    $ascdsc = ($sort == 1) ? "asc" : "desc";

    $columns = implode(", ", $columnArr);
    $query = "select $columns from $tableName order by $order $ascdsc";
    $result = mysqli_query($connect, $query);
    $rowCount = mysqli_num_rows($result);

    if (isset($result) && $rowCount > 0) {
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $row;
    }

    return "Data not found.";
}

function register($data)
{
    global $connect;

    $username = mysqli_real_escape_string($connect, $data['username']);
    $name = mysqli_real_escape_string($connect, $data['name']);
    $password = mysqli_real_escape_string($connect, $data['password']);

    $usernameCheck = mysqli_query($connect, "select username from admin where username = '$username'");

    if (mysqli_fetch_assoc($usernameCheck)) {
        echo "<script>alert('The username is already used by another admin, please use other username.')</script>";
        return;
    }

    if (strlen($password) < 8) {
        echo "<script>alert('The password is too short, please use longer password between 8 - 20 characters.')</script>";
        return;
    }

    if (strlen($password) > 20) {
        echo "<script>alert('The password is too long, please use shorter password between 8 - 20 characters.')</script>";
        return;
    }

    if ($password !== $data['password-confirm']) {
        echo "<script>alert('Please confirm your password correctly!')</script>";
        return;
    }

    $query = "insert into admin (username, name, password) values ('$username', '$name', '$password')";
    $push = mysqli_query($connect, $query);

    if (!$push) {
        header("location: register-admin.php");
    }

    header("location: login-admin.php");
}

function login($data)
{
    global $connect;
    session_start();

    $username = mysqli_real_escape_string($connect, $data['username']);
    $password = mysqli_real_escape_string($connect, $data['password']);

    $usernameCheck = mysqli_query($connect, "select username from admin where username = '$username'");

    if (!mysqli_fetch_assoc($usernameCheck)) {
        echo "<script>alert('The username is not found.')</script>";
        return;
    }

    $passwordCheck = mysqli_query($connect, "select * from admin where username = '$username' and password = '$password'");
    $pass = mysqli_fetch_assoc($passwordCheck);

    if (!isset($pass['password'])) {
        echo "<script>alert('Wrong password!')</script>";
        return;
    }

    $_SESSION['username'] = $username;
    $_SESSION['name'] = $pass['name'];

    header('location: dashboard-admin.php');
}

function logout()
{
    session_start();

    if (session_destroy()) {
        header('location: login-admin.php');
    }
}

function fetchAdminData()
{
    $tableName = 'admin';
    $columnArr = ['name', 'username', 'password'];

    return fetchMany($tableName, $columnArr, "name", 1);
}

function deleteAdmin($data)
{
    global $connect;

    $username = mysqli_real_escape_string($connect, $data['username']);

    $checkUsername = mysqli_query($connect, "select * from admin where username = '$username'");

    if (!isset($checkUsername)) {
        echo "<script>alert('Failed deleting admin data. Admin not found!')</script>";
        return;
    }

    mysqli_query($connect, "delete from admin where username = '$username'");
    header('location: manage-admin.php');
}

function addItem($data, $image)
{
    global $connect;

    $brand = mysqli_real_escape_string($connect, $data['brand']);
    $year = mysqli_real_escape_string($connect, $data['year']);
    $kilometer = mysqli_real_escape_string($connect, $data['kilometer']);
    $description = mysqli_real_escape_string($connect, $data['description']);
    $dateUploaded = mysqli_real_escape_string($connect, $data['dateUploaded']);

    if ($kilometer == null || $kilometer == '0') {
        $kilometer = "NEW";
    }

    $fileName = $image['imgName']['name'];
    $explodeName = explode(".", $fileName);

    $imgName = time() . uniqid(rand()) . '.' . end($explodeName);
    $imgPath = "img/";
    move_uploaded_file($image['imgName']['tmp_name'], $imgPath . $imgName);

    $query = "insert into product (brand, year, kilometer, description, imgName, dateUploaded) values ('$brand', '$year', '$kilometer', '$description', '$imgName', '$dateUploaded')";
    $push = mysqli_query($connect, $query);

    if (!$push) {
        echo "<script>alert('Failed while adding the data to database.')</script>";
        return;
    }

    header('location: add-item.php');
}

function fetchProductData()
{
    $tableName = 'product';
    $columnArr = ['id', 'brand', 'year', 'kilometer', 'description', 'imgName', 'dateUploaded'];

    return fetchMany($tableName, $columnArr, "id", 0);
}

function deleteProduct($data)
{
    global $connect;

    $id = mysqli_real_escape_string($connect, $data['id']);
    $imgName = mysqli_real_escape_string($connect, $data['imgName']);

    $checkId = mysqli_query($connect, "select * from admin where username = '$id'");

    if (!isset($checkId)) {
        echo "<script>alert('Failed deleting product data. Product not found!')</script>";
        return;
    }

    mysqli_query($connect, "delete from product where id = '$id'");
    unlink("img/$imgName");

    header('location: manage-item.php');
}

function shortenDesc($data)
{
    $description = $data;

    if (strlen($description) > 50) {
        $shortDesc = substr($description, 0, 50) . "...";
        return $shortDesc;
    }

    return $description;
}

function editItem($data, $image = null)
{
    global $connect;

    $id = mysqli_real_escape_string($connect, $data['id']);
    $brand = mysqli_real_escape_string($connect, $data['brand']);
    $year = mysqli_real_escape_string($connect, $data['year']);
    $kilometer = mysqli_real_escape_string($connect, $data['kilometer']);
    $imgName = mysqli_real_escape_string($connect, $data['imgName']);
    $description = mysqli_real_escape_string($connect, $data['description']);

    if (isset($image)) {
        unlink("img/$imgName");

        $fileName = $image['imgName']['name'];
        $explodeName = explode(".", $fileName);

        $imgName = time() . uniqid(rand()) . '.' . end($explodeName);
        $imgPath = "img/";
        move_uploaded_file($image['imgName']['tmp_name'], $imgPath . $imgName);
    }

    $query = "update product set brand = '$brand',  year = '$year', kilometer = '$kilometer', imgName = '$imgName', description = '$description' where id = '$id'";
    $result = mysqli_query($connect, $query);

    if (!$result) {
        echo "<script>alert('Failed while updating the data to database.')</script>";
        return;
    }

    header('location: manage-item.php');
}
