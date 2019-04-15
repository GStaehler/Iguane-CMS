<?php

abstract class Element
{
    
    // private $theme = "light";
    
    public function getDatabase(): void
    {
        require("model/database.php");
    }
    
    /* public function setTheme($theme): void
    {
        $this->theme = $theme;
    } */

}
