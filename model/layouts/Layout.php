<?php

abstract class Layout
{

    private $bdd;
    
    public function getDatabase(): void
    {
        global $bdd;
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=iguane;charset=utf8', 'root', '');
    }

}