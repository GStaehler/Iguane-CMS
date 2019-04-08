<?php

class LayoutAside extends Layout
{
    
    public function integrate($page): void
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT site.grid AS grid FROM site');
        echo "<div id=\"layoutAside\" class=\"col-lg-4 col-md-4 col-sm-12 container";
        while ($data = $req->fetch()) { if($data['grid' == 1]) { echo " grid"; }}
        echo "\">";
        $text = new Text;
        $text->integrate(2, $page);
        $code = new Code;
        $code->integrate(2, $page);
        $img = new Image;
        $img->integrate(2, $page);
        $vid = new Video;
        $vid->integrate(2, $page);
        echo "</div>";
    }
    
}