<!Doctype html>
<html>
<head>
<title> <?php echo TITLE ?> </title>
<link rel="stylesheet" href="<?php echo CSS ?>custom.css">
<script type="text/javascript" src="<?php echo JS ?>jquery.js"> </script>
<script type="text/javascript" src="<?php echo JS?>custom.js"></script>
<?php
    $session = new Session();
    $get_session = $session->get('loggin');
    if ($get_session==0) {
       header('Location: '.URL.'login');
    } 
?>
</head>
<body>
<div id="wrapper">
    <div id="header">
        <div id="nav-menu">
            <div class="site-title">
                <h1> <?php echo TITLE ?> </h1>
            </div>
            <div class="menu">
                <ul>
                    <li> 
						<a href="<?php echo URL ?>"> Home </a> 
					</li>
                    <li> 
						<a href="<?php echo URL ?>sample_page"> 
						Sample page
						</a>
						
							
					</li>
					 <li> 
						<a href="<?php echo URL ?>another_sample_page"> Another Sample page </a> 
					</li>
                    
                   
                    <li> 
						<a href="<?php echo URL ?>logout"> Log-out </a> 
					</li>
                </ul>
            </div>
        </div>
    </div>
   
    <div id="content">