<?php
	session_start();
    $_SESSION['loginstatus']=0;
	session_destroy();
	header('Location:../login/');
?>

