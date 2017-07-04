<?php
	include('sessions_members.inc.php');
	session_destroy();
	header('Location:../../index.php');
?>