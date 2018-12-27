<?php include("include/head.php"); ?>

		<div class="container">

			<h1>NOM SERVEUR - Administration</h1>

			<h2>Ajout dans la WhiteList</h2>

			<div class="separateur"></div>

			<form method="post" action="include/fonction.php">

				<div id="form-position">
				
					<div class="input-group mb-3">

	 					<div class="input-group-prepend">

	    					<span class="input-group-text" id="basic-addon1"><i class="fab fa-steam"></i></span>

	  					</div>

	  					<input type="post" name="identifier" class="form-control" placeholder="Steam ID" aria-label="steamid" aria-describedby="basic-addon1">

					</div>

				</div>					
				
				<button type="submit" class="btn btn-success">Ajouter a la WhiteList</button>
				
			</form>

			<?php

         		if(!empty($_GET['ajout']) && $_GET['ajout']=="ok"){

        	?>

        		<div class="container">

	            	<div style="text-align: center; margin-top: 25px;" class="alert alert-success" role="alert">

	              		<strong>Ajout d'un joueur dans la WhiteList <i class="fas fa-check"></i></strong>

	            	</div>

	            	<p class="confirm-menu">Veuillez cliquer sur le bouton ci-dessous, s'il vous plait.</p>

	            	<a href="index.php"><button type="button" class="btn btn-primary">Retour</button></a>

	            </div>

       		<?php

          	}

        	?>

		</div>

<?php include("include/footer.php"); ?>