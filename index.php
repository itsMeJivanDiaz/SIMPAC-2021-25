<?php
//load Configuration
require 'Config/connection.php';
require 'Config/info.php';
require 'Config/path.php';
//load Library
require 'Library/drix.php';
require 'Library/session.php';
require 'Library/database.php';
require 'Library/controller.php';
require 'Library/view.php';
require 'Library/model.php';

$drix_exec = new Drix_MVC_Exec();

