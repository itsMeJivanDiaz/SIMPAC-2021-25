<?php
Class Session {
    function __construct() {
         session_start();
    }
    public function set($key, $value) {
        $_SESSION[$key] = $value;
    }
    public function get($key) {
        return isset( $_SESSION[$key] ) ? $_SESSION[$key] : 0;
    }
    public function destroy() {
        unset( $_SESSION );
        session_destroy();
    }
}