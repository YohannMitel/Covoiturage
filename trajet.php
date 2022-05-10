<!DOCTYPE html>
<html lang="fr" dir="ltr">
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
        <h1> Ajouter un trajet</h1>
        <form action="trajet" method="post">	
        <div>
            <label for="depart">Lieu de départ</label>
            <input type="text" name="depart">
        </div>
        <div>
            <label for="arrive">Arrivé</label>
            <input type="text" name="arrive" >
        </div>
        <div>
            <label for="aller">Horaire d'aller</label>
            <input type="text" name="aller">
        </div>
        <div>
            <label for="retour">Horaire de retour</label>
            <input type="text" name="retour">
        </div>
        <div>
            <label for="immatriculation">Immatriculation</label>
            <input type="text" name="Immatriculation">
        </div>
        <div>
            <label for="nbplace">Nombre de place</label>
            <input type="text" name="nbplace">
        </div>
        <input type="submit">
        </form>
    </body>
</html>
