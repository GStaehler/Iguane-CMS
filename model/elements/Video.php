<?php

class Video extends Element
{

    private $isMultiple = true;

    public function integrate($layout, $page)//: void
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT SUBSTRING(element.content, 33, 255) AS content, element.layout FROM element INNER JOIN type ON element.type = type.id WHERE element.type = 8 AND element.layout = ' . $layout . ' AND element.page = ' . $page);
        while ($data = $req->fetch()) {
            echo "<iframe class=\"youtubeVideo\" src=\"https://www.youtube.com/embed/" . $data['content'] . "\"></iframe>";
        }
    }
}
