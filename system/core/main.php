<?php


class Main extends timer{

    function __construct() {
        parent::__construct();

        $this->view = new View();
    
        
 
    }

    public function loadModel($name) {
       
        $model_path = CON . 'models/' . $name . '_model.php';
        if (file_exists($model_path)) {
            require CON. 'models/' . $name . '_model.php';
            $modelName = $name.'_model';
            $this->model = new $modelName;
        }
    }

}
