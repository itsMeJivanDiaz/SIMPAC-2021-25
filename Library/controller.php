<?php
    Class Controller {
        function __construct() {
            $this->view = new View();            
        }
        
        public function loadModel($name) {
            $path = 'Model/'.$name.'_model.php';
            
            if( file_exists($path) ) {
                require $path;
                $ModelName = $name.'_model';
                $this->model = new $ModelName;
            }
        }
    }