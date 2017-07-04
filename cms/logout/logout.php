<?php
	require('../../lib_files/sessions.inc.php');
	session_unset();
	session_destroy();
	header('Location:../index.php');
?>