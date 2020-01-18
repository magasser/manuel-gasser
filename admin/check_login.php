<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/database.php';

function check_login($usr, $pwd) {
    $mysqli = connect();
    $usr = htmlspecialchars($usr);
    $pwd = htmlspecialchars($pwd);

    $query = "SELECT pwd_hash FROM admins WHERE username = '{$usr}'";
    if($data = $mysqli->query($query)) {
        while($row = $data->fetch_array(MYSQLI_ASSOC)) {
            if(password_verify($pwd, $row['pwd_hash'])) {
                return true;
            }
        }
    }

    return false;
}

session_start();

$error = '';

if(isset($_POST['login'])) {
    $login = $_POST['login'];

    if(check_login($login['usr'], $login['pwd'])) {
        $_SESSION['admin'] = $login['usr'];
        header('Location: /admin/admin_zone.php');
    } else {
        $error = 'Invalid username or password!';
        header('Location: /admin/login.php');
    }
}
