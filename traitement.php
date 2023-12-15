<?php 


// traitement.php - traiter les formulaires ici 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
  // Traitement du formulaire de commande 
  if (isset($_POST['nom']) 
  && isset($_POST['prenom'])
 && isset($_POST['email']) 
 && isset($_POST['message'])
 && isset($_POST['velo']) ) 
  

  
  // ... // Répondre avec un message de succès 
  echo "Formulaire soumis avec succès!"; } else {
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { die("L'adresse e-mail n'est pas valide.");}
    // Redirection si le formulaire n'a pas été validé
     header("Location: commandes.php"); exit(); } 
 
     


     // traitement.php - traiter les formulaires ici 
     if ($_SERVER["REQUEST_METHOD"] == "POST") { 
       // Traitement du formulaire de commande 
       if (isset($_POST['nom']) 
       && isset($_POST['prenom'])
      && isset($_POST['email']) 
      && isset($_POST['message'])
      ) 
       
     
       
       // ... // Répondre avec un message de succès 
       echo "Formulaire soumis avec succès!"; } else {
         
         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { die("L'adresse e-mail n'est pas valide.");}
         // Redirection si le formulaire n'a pas été validé
          header("Location: commandesaccess.php"); exit(); } 
      
     
     
     

?>


<?php 




  
  













