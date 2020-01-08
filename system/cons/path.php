<?php

/*
*Edit this file according to your server type
*/

class path {
     
    public function __construct(){
        $finder = $this->pathVar();

        if(file_exists($finder['session'])){
            require_once($finder['timer']);
          
            require_once($finder['core']);
            
            require_once($finder['cookie']);
            require_once($finder['hash']);
            require_once($finder['session']);
          
            require_once($finder['db_init']);
            require_once($finder['db']);
         
            //define some constants

            define('CON', $finder['app'].'controllers/');
            define('VIEWS', $finder['app'].'views/');
            define('MODELS', $finder['app'].'models/');

            require_once($finder['main']);
            require_once($finder['view']);
            require_once($finder['model']);
            
        }
        else{
            echo 'some files are not loaded, please check your configuration!';
        }
      
        

    }
    public function pathVar(){
        $server = [
            'ampps'=>'ampps',
            'xampp'=>'xampp'

        ];
        
        $folder = [
            'ampps'=>'www',
            'xampp'=>'htdocs'
        ];

        $os = [
            //input you path configuration according to your os type
            //edit it according to you $server installation folder

            'windows'=>'C:/'.$server[''].'/'.$folder[''].'/gingr/',

            //gingr is developed on a Linux Os, ampps server
            
            'linux'=>'/usr/local/'.$server['ampps'].'/'.$folder['ampps'].'/gingr/'
        ];

        //set your os type
        $os_type= $os['linux'];


        $path = [
            //default routing system
            'core'=>$os_type.'system/core/router.php',

            //time/date manager
            'timer'=>$os_type.'system/core/timer.php',

            //cookie manager
            'cookie'=>$os_type.'system/core/cookie.php',

            //session handler
            'session'=>$os_type.'system/core/session.php',

            //security hash handler
            'hash'=>$os_type.'system/core/hash.php',

            //database Initiator

            'db_init'=>$os_type.'system/cons/db.php',

            //db handler
            'db'=>$os_type.'system/config/db_config.php',

            //Application route
            'app'=>$os_type.'app/',

            //model loader
            'model'=>$os_type.'system/core/models.php',

            //view loader
            'view'=>$os_type.'system/core/views.php',

            //main controller
            'main'=>$os_type.'system/core/main.php'
        ];

        return $path;

    }
}



