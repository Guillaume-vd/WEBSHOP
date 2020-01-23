<?php 
	require_once 'panier.php';
	require_once'cart.php';
	
	$cnxDb = mysqli_connect('localhost', 'root', '', 'isiweb4shop');
	mysqli_select_db($cnxDb,'isiweb4shop');
	
	if(isset($GET['id'])){
		$sql_product = "SELECT id FROM products WEHRE id = '".$GET['id']."'";
		echo $sql_product;
		mysqli_query($cnxDb, $sql_product) or die("erreur produit");
		
		$_SESSION['invit'][$products[0]->id] = 1;
	}
	
?>