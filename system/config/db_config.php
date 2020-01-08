<?php

class db_config extends PDO{

    public function __construct(){
        parent::__construct('mysql:host=localhost;dbname=CocoGinger', 'root', 'mysql');
        echo "db correctly initiated";
    }

}