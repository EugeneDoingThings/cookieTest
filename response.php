<?php
$token = $_COOKIE['Token'];
// echo $token;
function isvalid ($token) {return true;}
if (isvalid($token))
		echo 'half life 3';
	else
		echo 'forbidden';
		
		
?>