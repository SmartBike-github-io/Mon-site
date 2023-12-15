<?php include("header.php"); ?>
      
      
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
    
   
</head>
<main>
        <h1>Contactez-nous</h1> 
    <!-- Formulaire de contact -->
     <form action="traitement.php" method="post"> 
        <label for="nom">Nom :</label> 
    <input type="text" id="nom" name="nom" required> <br>

        <label for="prenom">Prénom :</label> 
    <input type="text" id="prenom" name="prenom" required> <br>

        <label for="email">E-mail :</label> 
    <input type="email" id="email" name="email" required> <br>

    <label for="message">Message :</label> 
    <textarea id="message" name="message" required></textarea>

     <input type="submit" value="Envoyer"> 
    </form>
    <body>


</body>
</html>

        <style> 
        body {
             font-family: Arial, sans-serif; 
             } form { 
                max-width: 400px; 
                margin: 20px auto; 
                padding: 20px;
                 border: 1px solid #ccc;
                  border-radius: 5px; 
                  } label {
                     display: block; 
                     margin-bottom: 8px; 
                     } input, textarea { 
                        width: 100%; 
                        padding: 10px;
                        margin-bottom: 10px; 
                        box-sizing: border-box; 
                        } button {
                             background-color: #4caf50;
                              color: white;
                               padding: 10px 15px;
                                border: none; 
                                border-radius: 5px;
                                 cursor: pointer; 
                                 } 

        
                     
                                 body {
    font-family: 'Arial', sans-serif;
    font-size: 16px;
    line-height: 1.6;
    color: black;
    margin: 0; 
     
    padding: 0; 
    
    background-image: url('https://static.vecteezy.com/system/resources/previews/006/897/565/non_2x/smooth-orange-wave-abstract-background-abstract-gradient-orange-background-vector.jpg'); 
    
    background-size: cover; 
    
    background-position: center;
    background-repeat: no-repeat; 
}
                                </style>

<div id="map-section">
<h2>Emplacement de l'entreprise</h2>
<div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.451862481452!2d2.2351799764661204!3d48.88772507133611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6651cd96de975%3A0x34dfe0244fd026d9!2s20%20Bis%20Jardins%20Boieldieu%2C%2092800%20Puteaux!5e0!3m2!1sfr!2sfr!4v1699990117825!5m2!1sfr!2sfr" 
        width="600"
         height="450" 
         style="border:0;"
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade"
   frameborder="0"
   style="border:0;"
   allowfullscreen=""
   aria-hidden="false"
   tabindex="0"
   
    ></iframe>
    </div>
    </div>

    
    </main>



 