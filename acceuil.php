<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styleAcceuil.css">
<script src="script.js"></script>
    <title>Document</title>
</head>
<body>
  <header>
  <form id="form">
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-right:700px; display:flex;" >
    
    
          <p> <a class="dropdown-item" href="acceuil.php" style="text-decoration:none;   margin-right:25px; color:white;">Acceuil</span></a></p>
          <p> <a class="dropdown-item" href="index1.php" style="text-decoration:none;  margin-right:25px; color:white;">connexion</a><br></p> 
          <p> <a class="dropdown-item" href="inscription.php" style="text-decoration:none; margin-right:25px;  color:white;">inscription</a><br></p> 
          <p>  <a class="dropdown-item" href="ajoutlivre.php" style="text-decoration:none; margin-right:25px;  color:white;">ajout de livre</a></p> 
        
         
    


    </div>
    <input type="text" placeholder="search" id="search" class="search">

 
</nav>

    
  </form>
       
      

  </header>
  <main id="main">
    <div class="movie">
    <img src="https://th.bing.com/th/id/OIP.tJwXMJFtjZRpbMGn7VhsWAHaLH?w=186&h=279&c=7&r=0&o=5&pid=1.7" alt="image" style="height:50%; width:90%;  margin-left: 5%; margin-top:5%;">

<div class="movie-info">
  <h3>movie title</h3>
  <span class="green">9.8</span>
</div>
<div class="overview">

  Lorem ipsum dolor sit amet 
  consectetur adipisicing elit. 
  Qui officia possimus voluptates 
  officiis eaque culpa optio 
  necessitatibus accusantium at non ullam tempora commodi exercitationem eum mollitia, facere autem nam nulla?
</div>
    </div>

    <div class="movie">
      <img src="https://th.bing.com/th/id/OIP.tJwXMJFtjZRpbMGn7VhsWAHaLH?w=186&h=279&c=7&r=0&o=5&pid=1.7" alt="image" style="height:50%; width:90%;  margin-left: 5%; margin-top:5%;">

      <div class="movie-info">
        <h3>movie title</h3>
        <span class="green">9.8</span>
      </div>
      <div class="overview">
      
        Lorem ipsum dolor sit amet 
        consectetur adipisicing elit. 
        Qui officia possimus voluptates 
        officiis eaque culpa optio 
        necessitatibus accusantium at non ullam tempora commodi exercitationem eum mollitia, facere autem nam nulla?
      </div>
    </div>

    <div class="movie">
      <img src="https://th.bing.com/th/id/OIP.tJwXMJFtjZRpbMGn7VhsWAHaLH?w=186&h=279&c=7&r=0&o=5&pid=1.7" alt="image" style="height:50%; width:90%;  margin-left: 5%; margin-top:5%;">

      <div class="movie-info">
        <h3>movie title</h3>
        <span class="green">9.8</span>
      </div>
      <div class="overview">
      
        Lorem ipsum dolor sit amet 
        consectetur adipisicing elit. 
        Qui officia possimus voluptates 
        officiis eaque culpa optio 
        necessitatibus accusantium at non ullam tempora commodi exercitationem eum mollitia, facere autem nam nulla?
      </div>
    </div>
   
      
    <?php 
      include 'connexion.php';

		$req= 'SELECT * FROM livre ';
    $result = $conn->query($req);
    
    ?>

   
	
				<?php if ($result->num_rows > 0) {
          
          while ($row = $result->fetch_assoc()) {
          ?>
           
          <div class="movie-info">
              <?php echo $row['image']; ?>
          <div class="movie-info">
                <h3><?php echo $row['titre']; ?></h3>
                <span class="green">9.8</span>
        </div>
        <div class="overview">
      
                <?php echo $row['descript']; ?>
        </div>
    </div>



    <?php
          }
} else {
  echo "Aucun resultat trouve.";
}

$conn->close();
?>






</body>
</html>