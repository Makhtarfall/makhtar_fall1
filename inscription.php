<?php 
include 'connexion.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Inscription</title>
</head>
<body style=" background-color: #22254b;" >
<center>
<legend style="color:white; text-transform: uppercase;">creation compte</legend>
<form action="acceuil.php" method="POST" style=" margin-right: 40%;background-color: rgb(190, 185, 185); border-radius:10px;    box-shadow: rgb(139, 130, 130) 1px 5px 5px; border: rgb(97, 95, 95) 1px solid;     ">
                                            
                        <div class="form-group" style="display: flex;">
                        <tr><td><input type="text"  class="form-control" placeholder="Nom de famille" name="nom" style="width:49%;  margin-top:6%;"></td>
                        <td><input type="text"  class="form-control" placeholder="Prenom"  name="prenom"style="width:49%;  margin-top:6%;"></td></tr> 
                        </div><br>
                           
                    
                            <div class="form-group">
                            <input type="email" class="form-control" placeholder="entrer votre email"  name="email" style="width:98%;">
                            </div>
                            <br>

                           

                            <div class="form-group">
                            <input type="password"  class="form-control" placeholder="nouveau mot de passe" name="motdepasse" style="width:98%;">
                            </div>
                            <br>


                            <label for="date">date de naissance</label><br>
                            <div class="form-group">
                            <input type="date"  class="form-control" name="date" style="width:98%;" >
                            </div><br>

                                 <button type="submit" class="btn btn-primary" name="btn1" style="margin-bottom:4%;">confirmer</button>
                           </div>
                        </form>
                        </center>

</body>
</html>

<?php 



if (isset($_POST['btn'])) {
  $id= $_SESSION['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $date = $_POST['date1'];
   
   
   
   
    $sql = "INSERT INTO utilisateur(nom, prenom, email, mdp,date1) VALUES('$nom', '$prenom', '$email', '$mdp','$date')";
    $resultat = mysqli_query($conn, $sql);
    if ($resultat) {
      
        header("location : acceuil.php");
    }
}

?>