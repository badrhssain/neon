<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="style.css" rel="stylesheet">
<script src="myscripts.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
    <div class="video">
            <video autoplay muted loop class="video">
                <source src="videoplayback.mp4">
             </video>
        </div>
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cat??gorie
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

         <?php
        include('connection.php');
        $selectData="SELECT*From cat??gorie";
        $connectData=mysqli_query($db,$selectData);
        if(mysqli_num_rows($connectData)>0){
         while($row=mysqli_fetch_assoc($connectData)) {
          echo'<li class="dropdown-item"><a href ="produit.php?cat??gorie='.$row['Id_Cat??gorie'].'" class="dropdown-item1" >'.$row['NomCat??gorie'].'';
         }
        }
        
         ?>
         </ul>


        <li class="nav-item">
          <a class="nav-link" href="#">Personnaliser</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Contact</a>
        </li>
</nav>
</header>
        <div class="headerpic"></div>
        <div class="grsection">
        <section class="scleft"><h1>NEON NIGHT</h1>
        <p>Neon Night est une entreprise sp??cialis??e en N??on Light situ??e au Tanger.Nos luminaires d??coratifs sont fabriqu??s ?? partir de tubes n??on et d'ampoules LED pour une lumi??re fluorescente, ??conomique et ??cologique.Profitez de n??on ?? petit prix et choisissez votre taille, votre texte, votre polic,votre couleur et donnez de vie ?? vos pi??ces pour un int??rieur unique.Vous recevez votre n??on en une semaine et la livraison est totalement gratuite.</p></section>        
        <div class="square"></div>
        <section class="scright"><img class="img1" src="start Today!.jpg"></section>
        </div>
    </div>
    </div>
    <div class="grsection2">
    <div class="square2"></div>
        <section class="scleft2"><img class="img2" src="cry.png"></section>

        <?php ?>

        <section class="scright2"><h1>Personnaliser?</h1>
    <p>Vous souhaitez faire un design particulier, vous avez une id??e bien pr??cise en t??te ? Super, vous ??tes au bon endroit ! R??pondez au formulaire ci-dessous avec le plus de pr??cisions possible sur votre futur n??on sur-mesure, et nous vous enverrons un devis dans les 24h</p>
    <a class="a" href="#">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        personnaliser
    </a>
    </section>
        
        </div>
    </div>
    </div>
<div class="section2">
    <h1>Laissez-nous vous aider ?? cr??er une enseigne au n??on<br> personnalis??e qui am??nera votre maison ou votre entreprise<br> ?? une nouvelle hauteur d'??clairage.</h1>
    <a class="a" href="#">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        ACHETEZ
    </a>
</div>
  <div class="grsection">
        <section class="scleft3"><h1>DECOUVRIR  TOUS NOS NEON</h1>
        <p>Profitez d??s maintenant d'une magnifique collection pour votre d??coration. Que ce soit pour vous, votre business ou pour offrir ?? un proche, nos n??on LED s'adaptent ?? toutes les situations !</p>
        <a class="a" href="#">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        D??couvrir
    </a>  </section>
        <div class="square"></div>
        <section class="scright3"><img class="img4" src="download.png"></section>
        </div>
    </div>
    </div>
    <div class="grsection2">
    <div class="square2"></div>
        <section class="scleft2"><img class="img5" src="projet.jpg"></section>
        <section class="scright2"><h1>NEON POUR VOTRE PROJET</h1>
    <p>Lorsque vous tenez un commerce, avoir un n??on poss??de quelques avantages : il attire l'oeil, il fait donc entrer plus de client??le et peut inconsciemment avoir un impact sur votre chiffre d'affaires</p>
    <a class="a" href="#">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        commencer votre projet
    </a>
    </section>
</div>

<div class="videodiv">
  <div class="vidleft">
  <div class="recvideo">
    <h4>bebas nueue</h4>
    <h6>loremibsum</h6>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.<br><br> incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
  </div>
    <video src="videolm.mp4" autoplay muted>

  </div>
  <div class="vidright">
    <h2>simple design<br>for your company</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>
    <div class="bigvid">
    <div class="vidiv"><img class="vidicon" src="star.png"><h3>best quality</h3></div>
    <div class="vidiv"><img class="vidicon" src="star.png"><h3>forever nesty</h3></div>
    <div class="vidiv"><img class="vidicon" src="star.png"><h3>beautiful lighting</h3></div>
      </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
    <button class="btnreadmore">read more</button>
</div>
</div>


    <h1>Nos meilleures ventes</h1>
    <div class="container">
  <!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
<!--Indicators-->
<ol class="carousel-indicators">
<li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
<li data-target="#multi-item-example" data-slide-to="1"></li>
</ol> 
<!--/.Indicators-->

<!--Slides-->
<div class="carousel-inner" role="listbox">

<!--First slide-->
<div class="carousel-item active">
<div class="col-md-4" style="float:left">

<div class="card mb-3" style="border: none;">
<img class="card-img-top"src="card1.jpg" alt="Card image cap"></div>
</div>
<div class="col-md-4" style="float:left;">
<div class="card mb-3" style="border: none;"><img class="card-img-top"src="card2.png" alt="Card image cap"></div>
</div>
<div class="col-md-4" style="float:left">
<div class="card mb-3" style="border: none;"><img class="card-img-top"src="card3.jpg" alt="Card image cap"></div>
</div>
</div>
<!--/.First slide-->

<!--Second slide-->
<div class="carousel-item">
<div class="col-md-4" style="float:left">

<div class="card mb-3">
<img class="card-img-top"src="card4.jpg" alt="Card image cap"></div>
</div>
<div class="col-md-4" style="float:left">
<div class="card mb-3"><img class="card-img-top"src="card5.jpg" alt="Card image cap"></div>
</div>
<div class="col-md-4" style="float:left">
<div class="card mb-3"><img class="card-img-top"src="card6.jpg" alt="Card image cap"></div>
</div>
<!--/.Second slide-->
</div>
<!--/.Slides-->
</div>
</div>



    <div class="grdiv">
    <div><img class="imgav" src="q1.png"></div>
    <div><img class="imgav"  src="q2.png"></div>
    <div><img class="imgav" src="q3.png"></div>
   
    </div>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>