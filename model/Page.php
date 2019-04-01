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
        $layoutMain->integrate(0);
        $layoutAside = new LayoutAside;
        $layoutAside->integrate(0);
        echo "</main>";
        $layoutFooter = new LayoutFooter;
        $layoutFooter->integrate(0);
    }
    
}
