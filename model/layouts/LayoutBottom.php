<?php

class LayoutBottom
{
    
    public function integrate($page)
    {
        echo "<div id=\"layoutBottom\" class=\"col-12 container\">";
        $img = new Image;
        $img->integrate(3, $page);
        $text = new Text;
        $text->integrate(3, $page);
        echo "</div>";
    }
    
}
