<?php

Class Index extends Controller{
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->view->render('header');  
        $this->view->render('index/index');
        $this->view->render('footer'); 
    }
}