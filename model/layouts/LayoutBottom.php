<?php

class LayoutBottom extends Layout
{
    
    public function integrate($page): void
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT site.grid AS grid FROM site');
        echo "<div id=\"layoutBottom\" class=\"col-12 container";
        while ($data = $req->fetch()) { if($data['grid' == 1]) { echo " grid"; }}
        echo "\">";
        $img = new Image;
        $img->integrate(3, $page);
        $text = new Text;
        $text->integrate(3, $page);
        $vid = new Video;
        $vid->integrate(3, $page);
        echo "</div>";
    }
    
}
