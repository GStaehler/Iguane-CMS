<?php

class Text extends Element
{

    private $isMultiple = true;

    public function getElement()
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT element.content, element.layout FROM element INNER JOIN type ON element.type = type.id WHERE element.type = 5');
        return $req;
    }

    public function integrate()
    {
        $element = $this->getElement();
        while ($data = $element->fetch()) {
            if ($data['layout'] == 1) {
                echo "<p class=\"layout1\">" . $data['content'] . "</p>";
            }
            else if ($data['layout'] == 2) {
                echo "<p class=\"layout2\">" . $data['content'] . "</p>";
            }
        }
    }
}
