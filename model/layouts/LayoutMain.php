<?php

class LayoutMain
{
    
    public function integrate()
    {
        echo "<div id=\"layoutMain\" class=\"col-8 container\">";
        $text = new Text;
        $text->integrate(1);
        echo "</div>";
    }
    
}