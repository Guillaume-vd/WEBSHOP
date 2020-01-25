<?php
	$cnxDb = mysqli_connect('localhost', 'root', '', 'isiweb4shop');
	$sql_table = "SELECT * FROM orders WHERE status = 'non payer';";
	$result = mysqli_query($cnxDb, $sql_table) or die($sql_table);
	$res = mysqli_fetch_assoc($result);
	//var_dump($res);
	
	$un = 1;
	
	require_once(PATH_VIEWS."bar.php");
	require_once(PATH_VIEWS."Categorie.php");
	require_once(PATH_VIEWS."Admin.php");	
?>