		<div class="container body-content column-right">
			<h1> Liste des commandes </h1>
            <table >
				<tr>
					<th> Customer id </th>
					<th> adresse </th>
					<th> type paiment </th>
					<th> date </th>
					<th> session </th>
					<th> total </th>	
				</tr>
				<?php
				foreach($res as $value){
					echo"<tr>";
						echo"<th> ".$res['customer_id']." </th>";
						echo"<th> ".$res['delivery_add_id']." </th>";
						echo"<th> ".$res['payment_type']." </th>";
						echo"<th> ".$res['date']." </th>";
						echo"<th> ".$res['session']." </th>";
						echo"<th> ".$res['total']." </th>";
					echo"</tr>";
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