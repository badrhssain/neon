<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link href="style.css" rel="stylesheet">
</head>
<body>
    <header>
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Catégorie
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

         <?php
        include('connection.php');
        $selectData="SELECT*From catégorie";
        $connectData=mysqli_query($db,$selectData);
        if(mysqli_num_rows($connectData)>0){
         while($row=mysqli_fetch_assoc($connectData)) {
          echo'<li class="dropdown-item"><a href ="produit.php?catégorie='.$row['Id_Catégorie'].'" class="dropdown-item1" >'.$row['NomCatégorie'].'';
         }
        }
        
         ?>
         </ul>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Personnaliser</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
</nav>
</header>