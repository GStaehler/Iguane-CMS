<?php

class LayoutHeader
{
    
    public function integrate()//: void
    {
        $navbar = new Navbar;
        $navbar->integrate();
        $title = new Title;
        $title->integrate();
    }
    
}