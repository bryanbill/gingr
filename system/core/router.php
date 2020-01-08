<?php

class router {
  protected $controller = 'home';
  protected $index = '';
  protected $param = [];

  public function __construct(){
    $url = $this->parseUrl();

   // print_r($url);

    //define the landing page file
    if(file_exists(CON.$url[0])){
      if(isset($url)){
        $this->controller = $url[0];
        new $url[0];
      }
  }
    //call the error handler
    $this->defineErrorHandler();
    
    //call the default index method
    $this->defineIndexMethod();

  }
  public function parseUrl(){
    if (isset($_GET['url'])) {

      return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));

      }
    require_once(CON.$this->controller.'.php');
    
     
  }

  public function defineErrorHandler(){
    //Default routing page
    require_once(CON.$this->controller.'.php');

    $instance = new $this->controller;
  }

  public function defineIndexMethod(){
    if(isset($url[1])){
      if(method_exists($this->controller, $url[1])){
        $this->controller = $url[1];
      }
        $this->controller.$this->index;
    }

  }


}

