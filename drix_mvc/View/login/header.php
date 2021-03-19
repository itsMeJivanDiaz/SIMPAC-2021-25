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
    if ($get_session==1) {
       header('Location: '.URL);
    } 
?>
</head>
<body>
<div id="wrapper">
    <div id="content">
       