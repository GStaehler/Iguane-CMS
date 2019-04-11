<!doctype HTML>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free-5.7.2-web/css/all.min.css">
    <style><?php require_once("style/view.css"); ?></style>
</head>

<body class="container">
<a class="fas fa-eye fa-3x" href="/"></a>
<form action="" method="post">
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

$bdd = new PDO('mysql:host=127.0.0.1;dbname=iguane;charset=utf8', 'root', '');
$req = $bdd->query('SELECT name, password FROM user');
while ($data = $req->fetch()) {
    
    if (isset($_POST['submitLogin'])) {

        if ($_POST['username'] == $data['name'] && $_POST['password'] == $data['password']) {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            header("Location: /admin");
        }
    }
}
?>