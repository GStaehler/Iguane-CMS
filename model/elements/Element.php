<?php

abstract class Element
{

    private $isMultiple;
    private $bdd;

    public function isMultiple()
    {
        return $this->isMultiple;
    }
    
    public function getDatabase()
    {
        global $bdd;
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=filrougephp;charset=utf8', 'root', '');
    }

}
