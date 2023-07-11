<?php
session_start();
@$email1=$_POST["email1"];
@$mdp=$_POST["mdp"];
@$btn1=$_POST["btn1"];
$erreur="";

if(isset($btn1)){
    if($email1=="user" && $motdepasse=="123"){
          header("location:acceuil.php");
    }else{
        $erreur="mauvais login ou mot de passe";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
</head>
<body style=" background-color: rgb(186, 190, 190);">
    <div class="container-fluid">
           
         <div class="row">

                <div class="col-lg-5 left" >
                   <h1>good-Reading</h1>
                     <h5>vivez la vie comme vous le souhaiter <br>
                    avec notre site de lecture Good-learn</h5>
                </div>

                     <div class="col-lg-4 right" style="margin-top:7%;  width:30%; " >
                        <form action="acceuil.php" method="POST" >
                           
                           <div class="form-group">
                            <input type="email" class="form-control" name="email1" palceholder="adresse Email ou numero de tel" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="adresse Email ou numero de tel">
                           </div>
                           <br>
                    
                            <div class="form-group">
                                <input type="password" class="form-control" name="mdp" id="exampleInputPassword1" placeholder="mot de passe">
                            </div>
                            <br>

                           

                            <div class="form-group">
                            <button type="button"  name="btn1" class="btn btn-primary connexion">Connexion</button>
                            </div>
                            <br>

                            <div class="mb-3 form-check">
                                <center><a href="">information de compte oublie ?</a></center>
                            </div>
                            <hr>

                            <div>
                                <center><button type="button" class="btn btn-primary " style="background-color: rgb(75, 196, 91); color: white; margin-bottom:8%; padding-left:10%; padding-right:10%;"><a href="inscription.php">creer un compte</a></button></center>

                           </div>
                        </form>
                     
                    
                   </div>
                      
                       
                     
                
         </div>

   </div>







<!-- bootstrap  js-->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>