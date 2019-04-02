<?php

class Title extends Element
{

    private $isMultiple = false;

    public function integrate(): void
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT element.content, site.theme AS theme FROM site, element INNER JOIN type ON element.type = type.id WHERE element.type = 3');
        while ($data = $req->fetch()) {
            if($data['theme'] == 2) {
                echo "<h1 class=\"text-center darkTheme\">" . $data['content'] . "</h1>";
            }
            else {
                echo "<h1 class=\"text-center\">" . $data['content'] . "</h1>";
            }
        }
    }
}
