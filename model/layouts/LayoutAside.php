<?php

class LayoutAside
{
    
    public function integrate($page)
    {
        echo "<div id=\"layoutAside\" class=\"col-4 container\">";
        $img = new Image;
        $img->integrate(2, $page);
        $text = new Text;
        $text->integrate(2, $page);
        echo "</div>";
    }
    
}