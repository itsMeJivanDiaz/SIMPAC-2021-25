<?php
Class Another_Sample_Page Extends Controller {
        function __construct() {
           parent::__construct();
        }
        
        public function index() {
            $this->view->render('header');
            $this->view->render('another_sample_page/index');
            $this->view->render('footer');
        }
        
        public function sample_page_second_level() {
            $this->view->render('header');
            $this->view->render('another_sample_page/second_level');
            $this->view->render('footer');
        }
}