<?php

abstract class Layout
{
    
    public function getDatabase(): void
    {
        require("model/database.php");
    }

}