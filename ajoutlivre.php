<?php

include 'connexion.php';

?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>TODO</title>
</head>
<body style="background-color:#22254b;">


	<form action="acceuil.php" method="POST" >
		<div class="container">
			<div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
				<h3 class="text-center text-primary font-monospace">Ajout de livre</h3>
				<div class="col-8">
					<label for="lib" class="form-label">titre</label>
					<input type="text" name="titre" class="form-control">
				</div>

				<div class="col-8">
					<label for="description" class="form-label">description</label>
					<input type="text" name="descript" class="form-control">
				</div>


				<div class="col-8">
					<label for="image" class="form-label">image</label>
					<input type="file" name="img" class="form-control">
				</div>


                
                <div class="col-8">
					<label for="auteur" class="form-label">Auteur</label>
					<input type="text" name="auteur" class="form-control">
				</div>
				

				
				<br><br><br><br>	
				<div class="mb-3">
					<center><button type="submit" class="btn btn-success" name="ajouter">Ajouter un livre</button></center>
				</div>
			</div>
		</form>

		


		
   </body>
   
  </html>

  <?php
  
if(isset($_POST['ajouter'])){
	$titre = $_POST['titre'];
	$description = $_POST['descript'];
	$image=$_POST['image'];
    $auteur=$_POST['auteur'];
     
	

	$req1 = "INSERT INTO livre (id,titre, descript ,image ,auteur) VALUES ('','$titre', '$description','$image','$auteur')";
    $resultat = mysqli_query($conn, $req1);



	if($resultat){
		var_dump(true);
	} else {
		var_dump(false);
	}
}

  ?>