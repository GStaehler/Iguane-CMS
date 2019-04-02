<?php

class NewPage
{
    
    public function integrate($page)//: void
    {
        echo "<main class=\"row\">";
        $layoutMain = new LayoutMain;
        $layoutMain->integrate($page);
        $layoutAside = new LayoutAside;
        $layoutAside->integrate($page);
        $layoutBottom = new LayoutBottom;
        $layoutBottom->integrate($page);
        echo "</main>";
    }
    
}
