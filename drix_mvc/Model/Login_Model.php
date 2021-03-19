<?php
Class Login_Model extends Model {
    function __construct() {
       parent::__construct();     
    }
    
    public function login() {
        $session = new Session();
        $query = $this->db->prepare("SELECT ID FROM users WHERE username = :username AND password = md5(:password)");
       
        $query->execute(
          array(
              ':username' => $_POST['username'],
              ':password' => $_POST['password']
          )     
        );
       
        $count = $query->rowCount();
        
        if($count>0) {
             $session->set('loggin',1);
             header('Location: ../');
        } else {
             header('Location: ../login');
        }
    }
}