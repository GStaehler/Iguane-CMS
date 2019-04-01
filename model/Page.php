<?php

class Page
{
    
    public function integrate($page): void
    {
        echo "<div id=\"layoutHeader\">";
        $layoutHeader = new LayoutHeader;
        $layoutHeader->integrate();
        echo "</div>";
        echo "<main class=\"row\">";
        $layoutMain = new LayoutMain;
        $layoutMain->integrate($page);
        $layoutAside = new LayoutAside;
        $layoutAside->integrate($page);
        $layoutBottom = new LayoutBottom;
        $layoutBottom->integrate($page);
        echo "</main>";
        $layoutFooter = new LayoutFooter;
        $layoutFooter->integrate($page);
    }
    
}
