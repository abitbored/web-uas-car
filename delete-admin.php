<?php
    require('connect.php');
    include("auth-session.php");
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($con, "DELETE FROM admin WHERE id = '$id'");
        header('location: manage-admin.php');
        $message = "Admin data has been deleted successfully!";
        echo "<script type='text/javascript'>alert($message);</script>";
    }
