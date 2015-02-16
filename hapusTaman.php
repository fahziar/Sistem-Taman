<?php
	require_once("util.php");
	if(isset($_POST['id'])){

		hapusDatabaseTaman($_POST['id']);
	}
?>