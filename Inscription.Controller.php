<?php 
	require_once 'Insciption.php';
	
	$cnxDb = mysqli_connect('localhost', 'root', '', 'isiweb4shop');
	mysqli_select_db($cnxDb,'isiweb4shop');
	
	$sql_customers = "INSERT INTO customers (id, firstname, surname, add1, add2, city, postcode, phone, email, registered) 
	VALUES (NULL, ".$_POST['forname'].", ". $_POST['login'].", 'ligne adresse1', 'ligne adresse 2', ".$_POST['add3'].", ".$_POST['postcode'].", ".$_POST['phone'].", ".$_POST['email'].", 1)";
	echo $sql_customers;
	//mysqli_query($cnxDb, $sql_customers) or die("erreur customer");
	
	$sql_logins = "INSERT INTO `isiweb4shop`.`logins` (`id`, `customer_id`, `username`, `password`)
	VALUES ('NULL', 'NULL', ".$_POST['login'].", ".$_POST['mdp'].")";
	echo $sql_logins;
	mysqli_query($cnxDb, $sql_logins) or die("erreur logins");;
	
	//header('Location: accueil.php');
?>