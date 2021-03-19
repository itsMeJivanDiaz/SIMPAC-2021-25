<?php
Class Database extends PDO {
    function __construct() {
        parent::__construct(TYPE.':host='.SERVER.';dbname='.DBNAME,USERNAME,PASSWORD);
    }
}
