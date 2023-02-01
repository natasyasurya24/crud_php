<?php
    require_once "config.php";
    $id = $_GET["id"];
    $query = "DELETE FROM results WHERE id = '$id'";
    if (mysqli_query($conn, $query)) {
        header("location: form.php");
    } else {
         echo "Something went wrong. Please try again later.";
    }
?>