<?php
	require_once("util.php");
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		hapusDatabaseTaman();
	}
?>