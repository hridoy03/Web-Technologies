<?php

	session_start();
	session_destroy();
	header("location: ../views/Home.php");

?>