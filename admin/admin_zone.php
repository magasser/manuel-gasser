<?php
session_start();

if(!isset($_SESSION['admin'])) {
    header('Location: /admin/login.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin zone</title>
    </head>
    <body>
        <h1>You are in the admin zone now bitch!!!</h1>
    </body>
</html>
