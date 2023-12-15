<?php
include "header.php";
?>
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
<meta charset="UTF-8">
<meta name="viewport"
 content="width=device-width, initial-scale=1.0">
<title>SmartBike - Accueil</title>






</head> 
<body>
 
    <style> 

    header { 
background-color: #343a40;
color: orange; 
text-align: center;
padding: 20px;
margin-bottom: 30px; 
font-family: 'Elephant', serif;
 animation: fadeIn 1s ease-in-out;
  /* Animation de fondu à l'entrée */ 
} @keyframes fadeIn {
   from { 
    opacity: 0;
   } to { 
    opacity: 1; } }

    /* Animation gauche à doite*/
header {  animation: slide 2s linear infinite alternate; } @keyframes slide { from { transform: translateX(0); } to { transform: translateX(50px); } }
  
  
   
.carousel img {
  max-width: 100%;
  max-height: 10%;
  object-fit: cover;
}

                                                      
</style>




 

  

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


       

    <section class="text">
  <h1>Soyez <span class="auto-typing"></span><h1>
    <p>
</p>
<style>
  .text {
    padding: 70px 0;
    color: black;
    max-width: 90%;
    margin-left: auto;
    margin-right: auto;

  }

  .text h1 {
    font-size: 75px;
    line-height: 2;
    margin-bottom: 1rem;
  }

  .text p {
    font-size: 1.2rem;
    line-height: 1.5;
    letter-spacing: 1px;
    margin-bottom: 2rem;
  }
  </style>

</section>



       <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5500">
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="https://www.lequipe.fr/_medias/img-ilosport-jpg/-/1500000000725190/0-828-417-75/df2ba.jpg" class="d-block w-100" alt="Photo 1">
  


    </div>
    <div class="carousel-item">
      <img src="https://koreus.cdn.li/thumbshigh/201912/urban-freerides-live-3-fabio-wibmer.jpg" class="d-block w-100" alt="Photo 2">
    </div>
    <div class="carousel-item">
      <img src="https://loop-sports.fr/cdn/shop/articles/25-bonnes-raisons-de-faire-du-velo-au-quotidien-240077.jpg?v=1685748252" class="d-block w-100" alt="Photo 3">
    </div>
    <div class="carousel-item">
      <img src="https://media.istockphoto.com/id/1136387131/fr/photo/m%C3%A8re-aidant-le-fils-portant-le-casque-pour-le-cyclisme.jpg?s=612x612&w=0&k=20&c=0IsNqFcOtN7NyEL2SSMT-LQ-pGT6-80Rcu3FbJLEtoA= " srcset="image-2x.jpg 2x, image-3x.jpg 3x" class="d-block w-100" alt="Photo 4">
    </div>
   
    <div class="carousel-item">
      <img src="https://www.emploivelo.com/wp-content/uploads/2021/02/dsc00267-min-1024x683.jpg" class="d-block w-100" alt="Photo 5">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.shoplightspeed.com/shops/639120/files/52915714/image.jpg" class="d-block w-100" alt="Photo 6">
    </div>
    <div class="carousel-item">
      <img src="https://www.francebleu.fr/s3/cruiser-production/2022/10/36ebb426-4c53-4199-b365-441cb5c4b159/1200x680_717601-f8uaybg6us-whr.jpg" class="d-block w-100" alt="Photo 7">
    </div>
    <div class="carousel-item">
      <img src="https://www.vttcoach.fr/wp-content/uploads/2017/07/DSC_0381-e1499630194459.jpg" class="d-block w-100" alt="Photo 8">
    </div>
    <div class="carousel-item">
      <img src="https://www.siroko.com/blog/c/app/uploads/2021/10/oscuridad_73a8b544-06fb-4982-a9f8-6499495dee3c-1440x900.jpg.webp" class="d-block w-100" alt="Photo 9">
    </div>
    <div class="carousel-item">
      <img src="https://www.cotesdarmor.com/uploads/2020/10/0000-00-velo-en-famille_alexandre-lamoureux.jpg" class="d-block w-100" alt="Photo 10">
    </div>
    <div class="carousel-item">
      <img src="https://tuvalum.fr/blog/wp-content/uploads/2021/09/14-1-900x484.jpg" class="d-block w-100" alt="Photo 11">
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

     
                                                              
<footer> © 2023 SmartBike. Tous droits réservés.
</footer> 

<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script>
  let type = new Typed('.auto-typing', {
    strings: ['aventureux, chaque trajet à vélo est une aventure qui vous attend', 'énergique, faites du vélo pour dynamiser votre journée',
     'inspiré, trouvez votre inspiration à chaque coup de pédale', 'apprenti, explorez chaque tour de roue comme une leçon de vie', 'audacieux, défiez vos limites sur deux roues',
    'zen, découvrez la sérénité à travers des balades à vélo', 'actif, choisissez le vélo comme mode de vie', 'vert, optez pour le vélo et contribuez à préserver la flore',
  'en forme, le vélo sculpte votre corps et votre esprit', 'social, partagez des moments inoubliables en vélo avec vos proches', 
  'libre et pédalez vers votre liberté à la recherche de nouveaus horizons'],
    typeSpeed: 50,
    backSpeed: 20,
    loop: true,
    fadeOut: true,
    fadeOutClass: 'typed-fade-out',
    fadeOutDelay: 500
  })
  </script>


</body> 
</html>

                
