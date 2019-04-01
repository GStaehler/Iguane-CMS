<?php

class Page
{
    
    public function integrate()
    {
        echo "<div id=\"layoutHeader\">";
        $layoutHeader = new LayoutHeader;
        $layoutHeader->integrate();
        echo "</div>";
        echo "<main class=\"row\">";
        $layoutMain = new LayoutMain;
        $layoutMain->integrate();
        $layoutAside = new LayoutAside;
        $layoutAside->integrate();
        echo "</main>";
        $layoutFooter = new LayoutFooter;
        $layoutFooter->integrate();
    }
    
}
