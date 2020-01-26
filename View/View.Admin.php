		<div class="container body-content column-right">
			<h1> Liste des commandes </h1>
            <table >
			<?php
				if($res != null){
					echo "<tr>";
						echo"<th> Customer id </th>";
						echo"<th> adresse </th>";
						echo"<th> type paiment </th>";
						echo"<th> date </th>";
						echo"<th> session </th>";
						echo"<th> total </th>";	
					echo"</tr>";
					foreach($res as $value){
						echo"<tr>";
							echo"<th> ".$res['customer_id']." </th>";
							echo"<th> ".$res['delivery_add_id']." </th>";
							echo"<th> ".$res['payment_type']." </th>";
							echo"<th> ".$res['date']." </th>";
							echo"<th> ".$res['session']." </th>";
							echo"<th> ".$res['total']." </th>";
							echo"<th> <a href='index.php?page=Validation&id=".$id_commnde."'> validé payment </a>  </th>";
						echo"</tr>";
					}					
				}
				else{
					echo"<h1> Pas de commande en cours</h1>";
				}

			?>
			</table>
            <footer>
              <?php
                echo("<p>".date("Y")." - ISIWEB4Shop</p>");
              ?>
            </footer>
		</div>
	</body>
</html>