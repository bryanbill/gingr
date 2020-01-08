<?php
require_once('timer.php');

class test extends timer{
    public function __construct(){
        parent::__construct(0, 0, 0, 9, 16, 2003);
        
    }
}
new test();