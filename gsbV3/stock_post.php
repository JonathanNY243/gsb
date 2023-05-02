<?php  
session_start();
//si la session est vide, redirection vers la page de login
if(!isset($_SESSION['nom'])) 
{
    header("Location:index.php");  
}
  if (isset($_POST['produit'])) {  
    
     
    include_once "pdoConnect.php";
    
     $connexion = pdo(); 

    $id = $_POST['id'];
    $nom_produit = $_POST['nom_produit'];
    $quantitestock = $_POST['quantitestock'];
   
    
  }
  
?>