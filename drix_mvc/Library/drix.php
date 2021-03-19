<?php
Class Drix_MVC_Exec {
    function __construct() {
       
       $get_url = isset( $_GET['url'] ) ? $_GET['url'] : 'index';
       $url = explode( '/',  rtrim( $get_url, '/' ) );
   
       $directory = count($url);
       /*** get the file ***/ 
            $file = 'Controller/'.$url[0].'.php'; 
            if( file_exists( $file ) ) {
               require $file; 
               $controller = new $url[0];
               $controller->loadModel( ucfirst( $url[0] ) );
            } else {
               $this->PageNotFound();
               return false;
            }
       /*** get the directory files ***/
            switch ($directory) {
                 case 1:					//1st level directory
                     $controller->index();
                     break;
                 case 2:					//2nd level directory
                     $dir = $url[1];
                         if(method_exists( $controller, $dir )) {
                             $controller->{$url[1]}();
                         } else {
                             $this->PageNotFound();
                         }
                     break;
				 case 3:					//3rd level directory
                     $dir = $url[1];
                         if(method_exists( $controller, $dir )) {
                             $controller->{$url[2]}();
                         } else {
                             $this->PageNotFound();
                         }
                     break;
                 default:
                     $this->PageNotFound();
                     break;
            }
            
            
       
    }
    
    public function PageNotFound() {
        require 'Controller/error404.php';
        $error = new Error404();
        $error->PageNotFound();
    }

}