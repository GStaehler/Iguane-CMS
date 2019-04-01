<?php

class LayoutMain
{
    
    public function integrate($page): void
    {
        echo "<div id=\"layoutMain\" class=\"col-8 container\">";
        $img = new Image;
        $img->integrate(1, $page);
        $text = new Text;
        $text->integrate(1, $page);
        echo "</div>";
    }
    
}