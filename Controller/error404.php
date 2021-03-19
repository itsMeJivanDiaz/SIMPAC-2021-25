<?php
Class Error404 extends Controller {
    function __construct() {
       
    }
    
    public function PageNotFound() {
        parent::__construct();
        $this->view->render('header');     
        $this->view->render('error/index');
        $this->view->render('footer');
    }
}