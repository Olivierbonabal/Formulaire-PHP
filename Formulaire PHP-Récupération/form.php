<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire PHP-Récupération</title>
</head>
<body>

<?php
 


?>




<form  action="./thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>

    <div>
        <label  for="prenom">Prenom :</label>
        <input  type="text"  id="prenom"  name="user_name" required>
    </div>

    <div>
        <label  for="tel">Telephone :</label>
        <input  type="tel"  id="tel"  name="user_tel" required>
    </div>

    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>

    <div>
        <label for="subject">Sujet</label><br>
        <select id="subject"  name="subject" value="">
            <option value="">Choisir un onglet</option>
            <option value="achats">Achats</option>
            <option value="maintenance">Maintenance</option>
            <option value="orders">Commandes</option>
            <option value="other">Autre</option>
        </select>
    </div>

    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>

    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>

    
</body>
</html>