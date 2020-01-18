<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
    <form action="/admin/check_login.php" method="post" name="login">
        <section class="login-form">
            <label for="username">Username</label>
            <input id="username" name="login[usr]" type="text" pattern="[a-zA-Z0-9]+" required>
            <br>
            <label for="pwd">Password</label>
            <input id="pwd" name="login[pwd]" type="password" pattern="[a-zA-Z0-9!@#._-]+" required>
            <br>
            <input id="login-button" type="submit" value="Log in">
        </section>
    </form>
    <?php if(isset($error) && !empty($error)) echo "<p style='color: red;'>{$error}</p>"; ?>
    </body>
</html>
