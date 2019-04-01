<?php

class LayoutMain
{
    
    public function integrate($page)
    {
        echo "<div id=\"layoutMain\" class=\"col-8 container\">";
        $text = new Text;
        $text->integrate(1, $page);
        $img = new Image;
        $img->integrate(1, $page);
        echo "</div>";
    }
    
}