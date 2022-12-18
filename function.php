<?php
require('connect.php');

function fetch($query) {
    global $connect;

    $result = mysqli_query($connect, $query);
    
    while ($resultRow = mysqli_fetch_assoc($result)) {
        $resultRows[] = $resultRow;
    }

    return $resultRows;
}

function register($data) {
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

function login($data) {
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

function logout() {
    session_start();

    if (session_destroy()) {
        header('location: login-admin.php');
    }
}

function deleteAdmin($data) {
    global $connect;

    $username = mysqli_real_escape_string($connect, $data['username']);

    $delete = mysqli_query($connect, "");
}
