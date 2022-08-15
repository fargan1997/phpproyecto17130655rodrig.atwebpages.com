<?php
    session_start();

    $host="fdb29.awardspace.net";
    $database="3670505_shop";
    $user="3670505_shop";
    $password="Password123.";

    $userName = $_POST['userName'] . " " . $_POST['lastName'];
    $userEmail = $_POST['userEmail'];
    $userProfilePicture = $_POST['userProfilePicture'];
    $userPassword = $_POST['userPassword'];

    $mysqli = new mysqli($host, $user, $password, $database);

    $query = "INSERT INTO USERS (userName, userEmail, userPassword, userProfilePicture) VALUES ('$userName', '$userEmail', '$userPassword', '$userProfilePicture')";

    $mysqli->query($query);
    $mysqli->close();

    header('Location: ../../login.php');
?>