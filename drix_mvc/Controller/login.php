<?php
Class Login extends Controller{
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
       $this->view->render('login/header');
       $this->view->render('login/index');
       $this->view->render('login/footer');
    }
    
    public function doLogin() {
        $this->model->login();
    }
}
