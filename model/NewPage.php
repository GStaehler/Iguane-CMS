<?php

class NewPage
{
    
    public function integrate($page)
    {
        echo "<main class=\"row\">";
        $layoutMain = new LayoutMain;
        $layoutMain->integrate($page);
        $layoutAside = new LayoutAside;
        $layoutAside->integrate($page);
        echo "</main>";
    }
    
}
