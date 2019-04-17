<?php

class LayoutAside extends Layout
{
    
    function __construct($page)
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT site.grid AS grid FROM site');
        echo "<div id=\"layoutAside\" class=\"col-lg-4 col-md-4 col-sm-12 container";
        while ($data = $req->fetch()) { if($data['grid' == 1]) { echo " grid"; }}
        echo "\">";
        $text = new Text(2, $page);
        $code = new Code(2, $page);
        $img = new Image(2, $page);
        $vid = new Video(2, $page);
        $fb = new Facebook(2, $page);
        echo "</div>";
    }
    
}