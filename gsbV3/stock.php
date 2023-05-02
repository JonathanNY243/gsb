<?php  
include_once "pdoConnect.php";
session_start();

      //si la session est vide, redirection vers la page de login
      if(!isset($_SESSION['nom'])) 
       {
           header("Location:index.php");  
       }

$connexion = pdo();       


$sql1 = "SELECT * FROM produit  ";

$reponse1 = $connexion->query($sql1);
 
$sql2 = "SELECT * FROM stock  ";

$reponse2 = $connexion->query($sql2);
$nomv = $_SESSION['nom'];

$sql3 = "SELECT * FROM stock WHERE nom_produit=\"$nomv\" order by quantitestock DESC ";
echo =$sql3;
$reponse3 = $connexion->query($sql3);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_rapport.css">
    <script src="https://kit.fontawesome.com/edec10413c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap" rel="stylesheet">
    <title>stock</title>
</head>
<body>

<header>
    <div class="logo">
    <img src="logo.png" alt="">
    </div>
    <div class="id">
    <div class="id_name">
    <p>
    <?php echo $_SESSION['prenom']; ?> <?php echo $_SESSION['nom']; ?>  
    </p>
    </div>
    <div class="id_photo">
    <img src="pp.jpg" alt="">
    </div>
    <a href="logout.php">  
    <i class="fas fa-sign-out-alt"></i> 
    </a>  

    </div>
</header>
<nav>
    <li>
    <!-- <a href="">planning</a> -->
    <a href="">produits</a>
    <a href="rapport.php">rapports</a>
    <a href="synthese.php">synthese</a>
    <a href="stock.php">stock</a>
    </li>
    
</nav>
<main>
    
    <div class="result_produit">
    <table>
    <thead>
        <tr> 
            <td>Id</td>
            <td>Nom du Produit</td>
            <td>Quantité en stock</td>
        </tr>
        
    </thead>

    <tbody>
        <?php  
            while ($data1 = $reponse1->fetch()) { ?>
    
    <tr>
    <td>    
    <?php 
    echo $data1['id']
    ?>    
    </td>
    <td>
    <?php
    echo $data1['nom_produit']
    ?>
    </td>
    <td>
    <?ph
    echo $data1['quantitestock']      }
    ?>

    </td>

    </tbody> 
      
      </table>
     </div>
     
 </main>
 
 </body>
 </html>