<!doctype HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
	<link rel="icon" href="https://image.flaticon.com/icons/png/512/83/83946.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free-5.7.2-web/css/all.min.css">
	<style><?php require_once("style/admin.css"); ?></style>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
</head>

<body style="font-family: 'Noto Sans', sans-serif;" class="container d-flex justify-content-center">
<div class="jumbotron">
<!-- <a class="fas fa-eye fa-3x" href="/"></a> -->
<form action="" method="post">
	<a class="fas fa-long-arrow-alt-left fa-2x" style="position: relative; bottom: 20px;" href="/"></a>
	<small class="form-text text-muted" style="color: white !important;">Gauthier Staehler</small>
	<h1><span style="font-family: 'Indie Flower';">Iguane CMS</span></h1>
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
	
<?php

require("model/database.php");
$req = $bdd->query('SELECT name, password FROM user');
while ($data = $req->fetch()) {
    
    if (isset($_POST['submitLogin'])) {

        if ($_POST['username'] == $data['name'] && $_POST['password'] == $data['password']) {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            header("Location: /admin");
        }
		
		else {
			echo "<div id=\"errMessage\" class=\"text-center mt-5\">Incorrect username or password. Try again.</div>";
		}
    }
}
	
?>
	
</div>
</body>

<style>
	
	body {
		color: white;
		background: linear-gradient(141deg, lightblue 0%, white 51%, lightblue 75%);
		background-attachment: fixed;
	}
	
	input, button, #errMessage {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
	
	.jumbotron {
		background-image: url("../../images/login_background.jpg");
		background-size: cover;
		margin-top: 80px;
		padding: 100px;
		width: 60%;
		box-shadow: 0 40px 80px 0 rgba(0, 0, 0, 0.6);
	}
	
	#errMessage {
		color: red;
		background-color: white;
		border-radius: .25rem;
		padding: 6px;
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
