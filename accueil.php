<!DOCTYPE html>
<?php include("functions.php"); ?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Exercice Technique WCS</title>

</head>
<body>

<!-- Header section -->
<header>
    <h1>
      <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
    </h1>
  </header>
  
  <!-- Main section -->
  <main>
    
    <!-- New member form -->
    <h2>Ajouter un(e) Argonaute</h2>
    <form class="new-member-form" method="POST" action="accueil.php">
      <label for="name">Nom de l&apos;Argonaute</label>
      <input id="name" name="name" type="text" placeholder="Charalampos" />
      <input type="submit" value="Envoyez" name="validez">
    </form>
  <?php
$query=$connexion->prepare
(
  "SELECT *
   FROM id"
 );
 $query->execute([]);
 $prenoms = $query->fetchAll(PDO::FETCH_ASSOC);
 
    if (isset($_POST['validez'])) {
    $prenom= $_POST["name"];


//On prépare la commande sql d'insertion
$query = $connexion->prepare
(
  'INSERT INTO id (prenom) VALUES(?)'
);
$query->execute([$prenom]);
  
            
}
?>
    
    <!-- Member list -->
    <h2>Membres de l'équipage</h2>
    <section class="member-list new-member">
    <div class="member-item">Eleftheria</div>
    <div class="member-item">Gennadios</div>
    <div class="member-item">Lysimachos</div>

      <?php foreach ($prenoms as $names) {?>
        <div class= "member-item new-member-color">
         <?= $names["prenom"]?>
        </div>
      <?php }?>


  
      <!-- <div class="member-item">Gennadios</div>
      <div class="member-item">Lysimachos</div> -->
      
    </section>
  </main>
  
  <footer>
    <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
  </footer>
</body>
</html>