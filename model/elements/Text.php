<?php

class Text extends Element
{

    private $isMultiple = true;

    public function integrate($layout, $page): void
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT element.content, element.layout, site.theme AS theme FROM site, element INNER JOIN type ON element.type = type.id WHERE element.type = 5 AND element.layout = ' . $layout . ' AND element.page = ' . $page);
        while ($data = $req->fetch()) {
            if($data['theme'] == 2) {
                echo "<p class=\"darkTheme\">" . $data['content'] . "</p>";
            }
            else {
                echo "<p>" . $data['content'] . "</p>";
            }
        }
    }
}
