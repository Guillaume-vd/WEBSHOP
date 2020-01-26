
		<center>
		<div class="container body-content column-right">

			<h2>Connection</h2>

			<form  method="post" action="index.php?page=login">
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
				<p>
					<h3> <?= $erreur ?></h3>
				</p>

            <footer>
              <?php
                echo("<p>".date("Y")." - ISIWEB4Shop</p>");
              ?>
            </footer>
		</div>
		</center>
	</body>
</html>