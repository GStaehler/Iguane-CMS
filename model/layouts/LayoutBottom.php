<?php

class LayoutBottom extends Layout
{
    
    function __construct($page)
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT site.grid AS grid FROM site');
        echo "<div id=\"layoutBottom\" class=\"col-12 container";
        while ($data = $req->fetch()) { if($data['grid' == 1]) { echo " grid"; }}
        echo "\">";
        $img = new Image(3, $page);
        $text = new Text(3, $page);
        $code = new Code(3, $page);
        $vid = new Video(3, $page);
        $fb = new Facebook(3, $page);
        echo "</div>";
    }
    
}
