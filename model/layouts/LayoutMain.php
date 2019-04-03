<?php

class LayoutMain extends Layout
{
    
    public function integrate($page): void
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT site.grid AS grid FROM site');
        echo "<div id=\"layoutMain\" class=\"col-8 container";
        while ($data = $req->fetch()) { if($data['grid' == 1]) { echo " grid"; }}
        echo "\">";
        $img = new Image;
        $img->integrate(1, $page);
        $text = new Text;
        $text->integrate(1, $page);
        $vid = new Video;
        $vid->integrate(1, $page);
        echo "</div>";
    }
    
}