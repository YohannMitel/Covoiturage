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
    <form action="trajet" method="post">
    <div class="texte">
      <input type="text" required>
      <span></span>
      <label>Lieu de départ</label>
    </div>
    <div class="texte">
      <input type="text" required>
      <span></span>
      <label>Lieu d'arrivée</label>
    </div>
    <div class="texte">
      <input type="date" required>
      <span></span>
      <label>Date</label>
    </div>
    <div class="texte">
      <input type="time" required>
      <span></span>
      <label>Horaire de départ</label>
    </div>
    <div class="texte">
      <input type="time" required>
      <span></span>
      <label>Horaire de retour</label>
    </div>
    <div class="texte">
      <input type="text" required>
      <span></span>
      <label>Immatriculation du véhicule</label>
    </div>
    <div class="texte">
      <input type="number" min="1"required>
      <span></span>
      <label>Nombre de places disponibles</label>
    </div>
    <input type="submit" value="Confirmer">
    </form>
  </div>

  </body>
</html>
