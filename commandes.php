<?php



function ajouter($nom, $desc, $prix, $photo)
{
    if(require("bdd.php"))
    {
       $req = $access->prepare("INSERT INTO produits (image, nom, description, prix, photo) VALUES($nom, $desc, $prix, $photo)");
    $req->execute(array($nom, $desc, $prix, $prix, $photo));
    $req->closeCursor();
    }
}
   function afficher()
   {
    
    if(require("bdd.php"))
    {
        $req=$access->prepare("SELECT * FROM produits ORDER BY id DESC");
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;

        $req->closeCursor();
    }
   }


     function supprimer($id)
     {

     if(require("bdd.php"))
     {
        $req=$access->prepare("DELETE FROM produits WHERE id=?");
        $req->execute(array($id));
     }

     }

?>


<?php include("header.php"); ?>

   <!DOCTYPE html> 
          <html lang="en">
             <head> 
                <meta charset="UTF-8"> 
                <meta name="viewport" 
            content="width=device-width, initial-scale=1.0"> 
            <title>Formulaire de Commande</title>
             <link rel="stylesheet" href="styles.css"> 
            </head> <body> <div class="container"> 
                <h1>Formulaire de Commande</h1> 

                <!-- Formulaire de commandes --> 
                <form action="traitement.php" method="post"> 

                <label for="prenom">Nom :</label> 
                <input type="text" 
                id="prenom" 
                name="prenom" required> 
                <label for="nom">Prénom :</label> 
                <input type="text"
                 id="nom" 
                 name="nom" required>
                  <label for="email">E-mail :</label>
                   <input type="email"
                    id="email"
                     name="email" required>
                      <!-- Menu déroulant statique --> 
                      <label for="velo">Sélectionnez un vélo :</label> 
                      <select id="velo" name="velo" required> 
                        <option value="velo1">Bike5</option> 
                        <option value="velo2">BikeOne</option> 
                        <option value="velo3">Bike22</option> 
                        <option value="velo3">BikeFirst</option>
                        <!-- Ajoutez d'autres options au besoin --> 
                </select> <label for="message">Indications :</label> 
                <textarea id="message" 
                name="message">
            </textarea> 
            <input type="submit" 
            value="Envoyer"> 
        
        </form> 
    </div> 
    
</body> 
</html>


<style>
   body {
       font-family: Arial, sans-serif; 
       background-color: #343a40; 
      } 
   .container {
       max-width: 600px; 
       margin: 50px auto; 
       background-color: orange;
        padding: 20px; 
        border-radius: 50px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
      } 
   form {
       display: grid; 
       grid-gap: 10px; 
      }
    label { 
      font-weight: bold; 
   } 
   textarea {
       height: 100px; 
      }
      input[type="submit"] { 
        background-color: black; 
        color: white; 
        cursor: pointer; 
        font-size: 16px;
        padding: 10px;
        border: none;
        border-radius: 6px;}


        body {
    font-family: 'Arial', sans-serif;
    font-size: 16px;
    line-height: 1.6;
    color: #333;
    margin: 0; 
     
    padding: 0; 
    
    background-image: url('https://img.freepik.com/photos-premium/art-abstrait-encre-marbre-partir-peinture-originale-exquise-pour-fond-abstrait_31965-60021.jpg'); 
    
    background-size: cover; 
    
    background-position: center;
    background-repeat: no-repeat; 
}
        </style>
     
     <?php include ("footer.php"); ?>
     