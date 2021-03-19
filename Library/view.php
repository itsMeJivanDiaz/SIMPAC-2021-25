<?php
Class View {
    
    function __construct() {
        
    }
    
    public function render($name) {
        require 'View/'.$name.'.php';
    }
    
    
}

