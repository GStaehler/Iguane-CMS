<?php

class Page
{
    
    function __construct($page)
    {
        echo "<div id=\"layoutHeader\">";
        $layoutHeader = new LayoutHeader;
        echo "</div>";
        echo "<main class=\"row\">";
        $layoutMain = new LayoutMain($page);
        $layoutAside = new LayoutAside($page);
        $layoutBottom = new LayoutBottom($page);
        echo "</main>";
        $layoutFooter = new LayoutFooter;
    }
    
}
