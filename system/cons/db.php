<?php


class db {
    public function __construct(){
        $db = $this->dbInit('', '', '','');
        
    }
    public function dbInit($server, $user, $name, $pass){

        $prop = [
            //<!-- TODO --> Impelement editing of this details during installation
            'server'=>$server,
            'user'=>$user,
            'name'=>$name,
            'pass'=>$pass

        ];
      return $prop;

    }
}