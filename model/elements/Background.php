<?php

class Background extends Element
{

    function __construct()
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT element.content FROM element INNER JOIN type ON element.type = type.id WHERE element.type = 6');
        while ($data = $req->fetch()) {
            echo " style=\"background-image: url(" . $data['content'] . "); background-size: cover;\"";
        }
    }
}
