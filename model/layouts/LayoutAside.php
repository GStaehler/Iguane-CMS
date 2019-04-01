<?php

class LayoutAside
{
    
    public function integrate()
    {
        echo "<div id=\"layoutAside\" class=\"col-4 container\">";
        $text = new Text;
        $text->integrate();
        echo "</div>";
    }
    
}