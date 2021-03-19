<?php
Class Sample_Page Extends Controller {
        function __construct() {
           parent::__construct();
        }
        
        public function index() {
            $this->view->render('header');
            $this->view->render('sample_page/index');
            $this->view->render('footer');
        }
        
        public function sample_page_second_level() {
            $this->view->render('header');
            $this->view->render('sample_page/second_level');
            $this->view->render('footer');
        }
		
		public function sample_page_third_level() {
            $this->view->render('header');
            $this->view->render('sample_page/third_level');
            $this->view->render('footer');
        }
		
		/** CRUD ACTIVITY **/
		public function insertRecordInSamplePage() {
			$this->model->insertRecord( $tablename );
		}
		
		public function listRecordInSamplePage() {
			$this->model->listRecord( $tablename, $id, $value );
		}
		
		public function updateRecordInSamplePage() {
			$this->model->updateRecord( $field_value1,$field_value2,$field_value3 );
		}
		
		public function deleteRecordInSamplePage() {
			$this->model->deleteRecord( $tablename,$fieldname,$value );
		}
}