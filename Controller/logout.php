<?php
Class Logout extends Controller {
    function __construct() {
       parent::__construct();
    }
    
    public function index() {
        $session = new Session();
        $session->destroy();
        header('Location: '.URL.'login');
    }
    
}
