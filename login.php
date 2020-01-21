<!DOCTYPE html PUBLIC>
<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css">
    <title>Connection au site</title>
	
	<body>

		<div class="connection">

			<h2>Connection</h2>

			<form  method="post" action="Connexion.controller.php">
				<p>
					<label for="text">Identifiant</label><br/>
					<input type="text" name="login" required />
				</p>
				<p>
					<label for="password">Mot de passe</label><br/>
					<input type="password" name="mdp" required />
				</p>
				<input type="submit" name="connection" value ="Se connecter"></a>
			</form>

		</div>

	</body>
</html>