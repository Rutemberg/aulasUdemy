<?php

require_once('config.php');

$_SESSION['nome'] = "Rutemberg";
//session_regenerate_id();
echo session_id();
 ?>
