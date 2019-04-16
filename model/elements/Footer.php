<?php

class Footer extends Element
{
    
    private $nvf = "nvf-black";

    function __construct()
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT element.content FROM element INNER JOIN type ON element.type = type.id WHERE element.type = 4');
        while ($data = $req->fetch()) {
            echo "<footer class=\"" . $this->nvf . "\"><div class=\"text-center\"><p class=\"text-muted\">&copy; " . date("Y") . " - " . $data['content'] . "</p></div></footer>";
        }
    }
}
