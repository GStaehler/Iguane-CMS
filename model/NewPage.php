<?php

class NewPage
{
    
    function __construct($page)
    {
        echo "<main class=\"row\">";
        $layoutMain = new LayoutMain($page);
        $layoutAside = new LayoutAside($page);
        $layoutBottom = new LayoutBottom($page);
        echo "</main>";
    }
    
}
