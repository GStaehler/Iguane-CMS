<?php

class LayoutAside
{
    
    public function integrate($page): void
    {
        echo "<div id=\"layoutAside\" class=\"col-4 container\">";
        $text = new Text;
        $text->integrate(2, $page);
        $img = new Image;
        $img->integrate(2, $page);
        $vid = new Video;
        $vid->integrate(2, $page);
        echo "</div>";
    }
    
}