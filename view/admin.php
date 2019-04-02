<?php

if (isset($_POST['addElement'])) {
    $req = $bdd->query('INSERT INTO element (type, content, layout, page) VALUES ("' . $_POST["type"] . '", "' . $_POST["content"] . '", "' . $_POST["layout"] . '", "' . $_POST["page"] . '")');
    header("Location: /");
}

if (isset($_POST['deleteElement'])) {
    $req = $bdd->query('DELETE FROM element WHERE id = ' . $_POST["delete"] . '');
    header("Location: /");
}

if (isset($_POST['createPage'])) {
    $req = $bdd->query('INSERT INTO page (name) VALUES ("' . $_POST["pageName"] . '")');
    header("Location: /".str_replace(' ', '', $_POST["pageName"]));
}

if (isset($_POST['deletePage'])) {
    $req = $bdd->query('DELETE FROM page WHERE id = ' . $_POST["deletePages"] . '');
    header("Location: /");
}

if (isset($_POST['changeTheme'])) {
    $req = $bdd->query('UPDATE site SET theme = ' . $_POST["theme"] . ' WHERE site.id = 1');
    header("Location: /");
}

$bdd = new PDO('mysql:host=127.0.0.1;dbname=filrougephp;charset=utf8', 'root', '');

?>

<!doctype HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Gauthier Staehler">
    <?php $req = $bdd->query('SELECT element.content FROM element WHERE element.type = 2'); ?>
    <title><?php while ($data = $req->fetch()) { echo $data['content'] . " - "; } ?>Administration</title>
    <link rel="stylesheet" href="style/admin.css">
    <link rel="stylesheet" href="vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free-5.7.2-web/css/all.min.css">
</head>

<body>
    <a class="fas fa-eye fa-3x" href="/"></a>
    <div id="administration" class="container">
        <h1>Administration</h1>
        <hr>
        <br>
        <h2>Elements :</h2><br>
        <form action="" method="post">
            <div class="form-group">
                <label for="TypeSelection">Choose an element</label>
                <select class="form-control" id="TypeSelection" name="type">
                    <option value="2">Navbar</option>
                    <option value="3">Title</option>
                    <option value="4">Footer</option>
                    <option value="5">Text</option>
                    <option value="6">Background Image</option>
                    <option value="7">Image</option>
                    <option value="8">Youtube Video</option>
                </select>
                <small class="form-text text-muted">Navbar, Title, Footer and Background Image are unique and can not be created more than once. When creating a page, the Title element of the new page is generated from its name. Navbar, Footer and Background Image are the same on every page.</small>
            </div>
            <div class="form-group">
                <label for="LayoutSelection">Select a layout</label>
                <select class="form-control" id="LayoutSelection" name="layout">
                    <option value="1">Main</option>
                    <option value="2">Aside</option>
                    <option value="3">Bottom</option>
                </select>
            </div>
            <?php $req = $bdd->query('SELECT page.name, page.id FROM page ORDER BY page.id'); ?>
            <div class="form-group">
                <label for="PageSelection">Select a page</label>
                <select class="form-control" id="PageSelection" name="page">
                    <option value="0">Home</option>
                    <?php while ($data = $req->fetch()) { echo "<option value=\"" . $data['id'] . "\">" . $data['name'] . "</option>"; } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="ContentArea">Content</label>
                <textarea class="form-control" id="ContentArea" rows="3" name="content" value=""></textarea>
                <!-- <small class="form-text text-muted">For multiple content, separate them with ";"</small> -->
            </div>
            <input type="submit" class="btn btn-success" name="addElement" value="Add Element">
            <hr class="m-4">
            <?php
            $req = $bdd->query('SELECT element.id, element.type, element.layout, element.content, type.name as type_name, layout.name as layout_name FROM element INNER JOIN type ON element.type = type.id INNER JOIN layout ON element.layout = layout.id ORDER BY element.id');
            ?>
            <div class="form-group">
                <label for="DeleteElement">Delete an element</label>
                <select class="form-control" id="DeleteElement" name="delete">
                    <?php while ($data = $req->fetch()) { echo "<option value=\"" . $data['id'] . "\">" . $data['id'] . " : " . $data['type_name'] . " | " . $data['layout_name'] . " -> \"" . $data['content'] . " \"</option>"; } ?>
                </select>
            </div>
            <input type="submit" class="btn btn-danger" name="deleteElement" value="Delete Element">
            <hr class="m-4">
            <h2>Pages :</h2><br>
            <div class="form-group">
                <label for="PageName">Name of the page</label>
                <input type="text" class="form-control" id="PageName" rows="3" name="pageName" value="">
            </div>
            <input type="submit" class="btn btn-success" name="createPage" value="Add Page">
            <hr class="m-4">
            <?php
            $req = $bdd->query('SELECT page.id, page.name FROM page ORDER BY page.id');
            ?>
            <div class="form-group">
                <label for="DeletePage">Delete a page</label>
                <select class="form-control" id="DeletePage" name="deletePages">
                    <?php while ($data = $req->fetch()) { echo "<option value=\"" . $data['id'] . "\">" . $data['id'] . " : " . $data['name']; } ?>
                </select>
            </div>
            <input type="submit" class="btn btn-danger" name="deletePage" value="Delete Page">
            <hr class="m-4">
            <h2>Theme :</h2><br>
            <div class="form-group">
                <?php
                $req = $bdd->query('SELECT site.theme, theme.name AS theme_name FROM site INNER JOIN theme ON theme.id = site.theme WHERE site.id = 1');
                while ($data = $req->fetch()) { echo "<p><small>Current Theme : " . $data['theme_name'] . "</small></p>"; };
                ?>
                <label for="ThemeSelection">Select a Theme</label>
                <select class="form-control" id="ThemeSelection" name="theme">
                    <option value="1">Light (For light color background)</option>
                    <option value="2">Dark (For dark color background)</option>
                </select>
            </div>
            <input type="submit" class="btn btn-info" name="changeTheme" value="Change Theme">
            <br class="mb-5">
        </form>
        <br>
        <br>
        <br>
    </div>
</body>

</html>
