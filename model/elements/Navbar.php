<?php

class Navbar extends Element
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
        $req = $bdd->query('SELECT element.content FROM element INNER JOIN type ON element.type = type.id WHERE element.type = 2');
        while ($data = $req->fetch()) {
            echo "<header><nav class=\"navbar navbar-expand-sm navbar-dark ". $this->nvf ."\">
                <a class=\"navbar-brand\" style=\"position: relative; bottom: 1px;\" href=\"/\">" . $data['content'] . "</a>
				<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
				<span class=\"navbar-toggler-icon\"></span></button>
				<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mr-auto\">";
            $req2 = $bdd->query('SELECT page.name FROM page');
            while($data2 = $req2->fetch()) {
                if ($data2['name'] !== "0") {
                    echo "<li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/" . str_replace('ê', 'e', str_replace('é', 'e', str_replace('è', 'e', str_replace(' ', '', $data2['name'])))) . "\">" . $data2['name'] . "</a>
                          </li>";
                }
            }
        echo "</ul>
		<ul class=\"navbar-nav ml-auto\">
		<li class=\"nav-item\">
        <a class=\"nav-link\" href=\"/admin\">Admin</a>
        </li></ul></div></nav></header>";
        }
    }
}
