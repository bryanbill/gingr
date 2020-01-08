<?php

/*  -------------HELLOOOOO GINGR HASHES------------- */

class hash {

    public function __construct(){
        $handler = $this->salt(29);

    }
    public function salt($salt){
        $key = $salt * $salt * $salt;
        return $key;

    }
    public function random(){
        
    }
}
