<?php

$req = $bdd->query('SHOW DATABASES LIKE "iguane"');

require("model/database.php");

?>

<!doctype HTML> <!-- WIP -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Gauthier Staehler">
    <title>Installation</title>
    <link rel="stylesheet" href="../vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css">
</head>

<body class="container text-center" style="margin-top: 80px;">
    <h1>Installation</h1>
    <div class="mb-4 lead"></div>
    <?php 
    
    while ($data = $req->fetch()) {
        if ($data[0] == "iguane") {
            echo "<div class=\"mb-4 lead alert alert-success\">Database is fine !</div>";
        }
    }
    
    ?>
    <a href="/">Back to Home</a>
</body>

</html>
