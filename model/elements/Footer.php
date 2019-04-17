<?php

class Footer extends Element
{
    
    private $nvf;
    
    function getNvf(): void
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT nvf.name FROM nvf INNER JOIN site ON site.nvf = nvf.id');
        while ($data = $req->fetch()) {
        $this->nvf = $data['name'];
        }
    }

    function __construct()
    {
        global $bdd;
        parent::getDatabase();
        $this->getNvf();
        $req = $bdd->query('SELECT element.content FROM element INNER JOIN type ON element.type = type.id WHERE element.type = 4');
        while ($data = $req->fetch()) {
            echo "<footer class=\"text-center " . $this->nvf . "\"><p class=\"text-muted\">&copy; " . date("Y") . " - " . $data['content'] . "</p></footer>";
        }
    }
}
