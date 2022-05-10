<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>    <meta charset="utf-8">
    <link rel="stylesheet" href="jemmene.css">
    <title></title>
  </head>
  <body>
    <ul id="nav">
      <li><a href="index.php">Accueil</a></li>
      <li><a href="#">J'emmene</a></li>
      <li><a href="trajet.php">Les trajets</a></li>
  </ul>
  <div class="center">
    <h1>Veuillez entrer un trajet</h1>
    <form action="enmene.php" method="get">
    <div class="texte">
      <input type="text" name="arrive" required>
      <span></span>
      <label for="arrive">Lieu d'arrivée</label>
    </div>
    <div class="texte">
      <input type="date" name="date" required>
      <span></span>
      <label for ="date">Date</label>
    </div>
    <div class="texte">
      <input type="time" name="daller" required>
      <span></span>
      <label for = "daller">Horaire de départ</label>
    </div>
    <div class="texte">
      <input type="time" name="dretour" required>
      <span></span>
      <label for="dretour">Horaire de retour</label>
    </div>
    <div class="texte">
      <input type="text" name="immatriculation" required>
      <span></span>
      <label for="immatriculation">Immatriculation du véhicule</label>
    </div>
    <div>
          <input type="radio" id="A" name="typet" value="A" required>
          <label for="A">Aller</label>
        </div>
        <div>
          <input type="radio" id="R" name="typet" value="R" required>
          <label for="R">Retour</label>
        </div>
        <div>
          <input type="radio" id="AR" name="typet" value="AR" required>
          <label for="AR">Aller et retour</label>
        </div>
    </div>
    <div class="texte">
      <input type="number" name="nbplace" min="1">
      <span></span>
      <label for ="nbplace">Nombre de places disponibles (facultatif)</label>
    </div>
    <input type="submit" value="Confirmer">
    </form>
  </div>
  </body>

    <?php
    require('config.php');
    session_start();
    echo $_SESSION['nom'];
    if (
    (!empty($_GET['arrive']))
    && (!empty($_GET['date']))
    && (!empty($_GET['daller']))
    && (!empty($_GET['dretour']))
    && (!empty($_GET['immatriculation']))
    && (!empty($_GET['typet']))
    ){

        $session =  $_SESSION['nom'];
        $depart = mysqli_query($conn,"SELECT domicile
        FROM etudiant 
        WHERE  nom>='$session'");
        echo "iciiiiiiii";
        $row=mysqli_fetch_assoc ($depart);
        $rowval = $row['domicile'];
        print_r($rowval);
        $arrive = $_GET['arrive'];
        $date = $_GET['date'];
        $daller = $_GET['daller'];
        $dretour = $_GET['dretour'];
        $immatriculation = $_GET['immatriculation'];
        $typet = $_GET['typet'];
        $nbplace = $_GET['typet'];
        $sql="INSERT INTO  trajet
        VALUES (NULL,'0','0', '$rowval', '$arrive', '$daller', '$dretour', '$date','$typet')";
        
        if ($conn->query($sql) === TRUE) {
          echo "Update successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
      
      ?>
</html>
