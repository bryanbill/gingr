<?php

class View {

    public function render($name) {
       require_once(VIEWS.$name.'.php');
    }
 
}


?>
