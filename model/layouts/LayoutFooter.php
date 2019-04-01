<?php

class LayoutFooter
{
    
    public function integrate($page)
    {
        $footer = new Footer;
        $footer->integrate(3, $page);
    }
    
}