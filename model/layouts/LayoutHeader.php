<?php

class LayoutHeader
{
    
    public function integrate()
    {
        $navbar = new Navbar;
        $navbar->integrate();
        $title = new Title;
        $title->integrate();
    }
    
}