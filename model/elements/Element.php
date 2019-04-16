<?php

abstract class Element
{
    
    public function getDatabase(): void
    {
        require("model/database.php");
    }

}
