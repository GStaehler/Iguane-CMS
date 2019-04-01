<?php

class LayoutAside
{
    
    public function integrate($page)
    {
        echo "<div id=\"layoutAside\" class=\"col-4 container\">";
        $text = new Text;
        $text->integrate(2, $page);
        echo "</div>";
    }
    
}