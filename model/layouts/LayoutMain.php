<?php

class LayoutMain extends Layout
{
    
    function __construct($page)
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT site.grid AS grid FROM site');
        echo "<div id=\"layoutMain\" class=\"col-lg-8 col-md-8 col-sm-12 container";
        while ($data = $req->fetch()) { if($data['grid' == 1]) { echo " grid"; }}
        echo "\">";
        $img = new Image(1, $page);
        $text = new Text(1, $page);
        $code = new Code(1, $page);
        $vid = new Video(1, $page);
        $fb = new Facebook(1, $page);
        echo "</div>";
    }
    
}