<?php 
	session_start();
	require_once 'login.php';
	
	$cnxDb = mysqli_connect('localhost', 'root', '', 'isiweb4shop'); 
	$erreur="";
	if (isset($_POST['login']) && isset($_POST['mdp'])){
		$login=$_POST['login'];
		$mdp=SHA1($_POST['mdp']);
		$query = "SELECT customer_id,username,password FROM logins WHERE username = '".$login."' AND password= '".$mdp."'";
		$result = mysqli_query($cnxDb, $query);
		$id= mysqli_fetch_assoc($result);
		//Sauvegarde du login, du mot de passe, du nom et du prénom de l'utilisateur si il appartient à la base de données
		if(mysqli_num_rows($result)!=0){ 
			$_SESSION['login'] = $login; 
			$_SESSION['mdp'] = $mdp;
			$_SESSION['customer_id']=$id['customer_id'];
			session_id($id['customer_id']);
			$erreur="";
			header('Location: accueil.php');
			session_start();
			$_SESSION['$login'] = array();
		}
		else {
			session_id();
			$erreur= "L'utilisateur n'est pas reconnu !";
		}
	}
?>