<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="mdp.css">
    <title>Changer de mot de passe</title>
  </head>
  <body>
    <div class="center">
      <h1> Changer de mot de passe</h1>
      <div class="texte">
        <input type="text" required>
        <span></span>
        <label>Ancien mot de passe</label>
      </div>
      <div class="texte">
        <input type="text" required>
        <span></span>
        <label>Nouveau mot de passe</label>
      </div>
      <div class="texte">
        <input type="text" required>
        <span></span>
        <label>Répétez le nouveau mot de passe</label>
      </div>
   	<input type="submit" value="Enregistrer"  onclick=window.location.href='profil.php'>
   	<button type="button" name="button" onclick=window.location.href='profil.php'>Annuler</button>
    </div>

  </body>
</html>
