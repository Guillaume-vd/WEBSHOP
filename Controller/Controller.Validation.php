<?php
	$cnxDb = mysqli_connect('localhost', 'root', '', 'isiweb4shop');
	mysqli_select_db($cnxDb,'isiweb4shop');
	
	$id = $_GET['id'];
	$sql_delet = "DELETE FROM orders WHERE customer_id=".$id." ;";
	echo $sql_delet;
	$result = mysqli_query($cnxDb, $sql_delet);
	if($result != null){
		header('Location:index.php?page=Admin');
	}
	else{
		die("la commande n'a pas été validé");
	}
	
?>