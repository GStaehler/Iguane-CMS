<!doctype HTML>
<html lang="fr">

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free-5.7.2-web/css/all.min.css">
	<style><?php require_once("style/admin.css"); ?></style>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
</head>

<body style="font-family: 'Noto Sans', sans-serif;" class="container d-flex justify-content-center">
<div class="jumbotron">
<a class="fas fa-eye fa-3x" href="/"></a>
<form action="" method="post">
	<small class="form-text text-muted" style="color: white !important;">Gauthier Staehler</small>
	<h1><span style="font-family: 'Indie Flower';">Iguane</span><span style="font-family: 'Indie Flower';"> CMS</span></h1>
    <br>
    <div class="form-group">
        <label for="formGroup">Username</label>
        <input type="text" class="form-control" id="formGroup" name="username" value="">
    </div>
    <div class="form-group">
        <label for="formGroup2">Password</label>
        <input type="password" class="form-control" id="formGroup2" name="password" value="">
    </div>
    <button type="submit" name="submitLogin" class="btn btn-info">Login</button>
</form>
</div>
</body>

<style>
	
	body {
		color: white;
		background: linear-gradient(141deg, lightblue 0%, white 51%, lightblue 75%);
		background-attachment: fixed;
	}
	
	input, button {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
	
	.jumbotron {
		background-image: url("https://images.pexels.com/photos/1509534/pexels-photo-1509534.jpeg");
		background-size: cover;
		margin-top: 80px;
		padding: 100px;
		width: 60%;
		box-shadow: 0 40px 80px 0 rgba(0, 0, 0, 0.8);
	}
	
	@media (max-width: 768px) {
		.jumbotron {
			width: 100%;
		}
	}
	
	@media (max-width: 480px) {
		.jumbotron {
			padding: 40px;
		}
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