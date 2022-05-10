<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>    <meta charset="utf-8">
    <link rel="stylesheet" href="sae.css">
    <title></title>
  </head>
  <body>
    <ul id="nav">
      <li><a href="index.php">Accueil</a></li>
      <li><a href="#">J'emmene</a></li>
      <li><a href="trajet.php">Les trajets</a></li>
  </ul>
  <body>

<h1> Ajouter un trajet</h1>
 <form action="trajet" method="post">	
<div>
	 <p> Lieu de Départ : <input type="text" name=" Lieudépart" </p>
</div>
<div>
	 <p> Lieu d'Arrivé : <input type="text" name=" LieuArrivé" </p>
</div>
<div>
	 <p> Jour : <input type="date" name=" Jour" </p>
</div>
<div>
	 <p> Horaire de départ : <input type="time" name=" HoraireDépart" </p>
</div>
<div>
	 <p> Horaire de Retour : <input type="time" name=" HoraireRetour" </p>
</div>
<div>
	 <p> Immatriculation : <input type="text" name=" Immatriculation" </p>
</div>
<div>
	 <p> Nombre de places disponibles : <input type="number" name=" places" </p>
</div>
<input type="submit">
</form>
  </body>
  </html>
  