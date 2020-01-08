<?php
class home extends Main {

    public function __construct(){
        parent::__construct();
      
        $this->view->render('home');
    }
    public function nb(){
        echo 'tet';
    }
}

