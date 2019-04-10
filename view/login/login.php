<!doctype HTML>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Gauthier Staehler - Fil Rouge 4.0.2 Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body class="container">
<form action="../admin.php" method="get">
    <h1>Login</h1>
    <hr>
    <br>
    <div class="form-group">
        <label for="formGroup">Username</label>
        <input type="text" class="form-control" id="formGroup" name="username" value="">
    </div>
    <div class="form-group">
        <label for="formGroup2">Password</label>
        <input type="password" class="form-control" id="formGroup2" name="password" value="">
    </div>
    <button type="submit" name="submitLogin" class="btn btn-info">Submit</button>
</form>
</body>

<style>
    form {
        margin-top: 60px;
    }

</style>

</html>

<?php
if (isset($_POST['submitLogin'])) {

    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    if ($username !== "admin" && $password !== "admin") {
        header("Location: login.php");
    }
}

///////////////////////////////////////////////////////////////////////

// session_start();
// $username = $_GET['username'];
// $password = $_GET['password'];
// if($username !== "admin" && $password !== "password") {
// if (session_status() !== PHP_SESSION_DISABLED) {
// header("Location: login/login.php");
// }
// }
?>