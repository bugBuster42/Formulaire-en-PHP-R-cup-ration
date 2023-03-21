<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="styles.css">
      <title>Formulaire en PHP</title>
</head>

<body>
      <form action="thanks.php" method="post">
            <div>
                  <label for="name">Nom :</label>
                  <input type="text" id="name" name="user_name">
            </div>
            <div>
                  <label for="firstname">Prénom :</label>
                  <input type="text" id="firstname" name="user_firstname">
            </div>
            <div>
                  <label for="mail">e-mail :</label>
                  <input type="email" id="mail" name="user_mail">
            </div>
            <div>
                  <label for="phone">Numéro de téléphone:</label>

                  <input type="tel" id="phone" name="user_phone" required>


            </div>
            <div><label for="subject">Sujet de votre mail </label>
                  <select id="subject" name="user_subject">
                        <option value="Thême 1">Thême 1</option>
                        <option value="Thême 2">Thême 2</option>
                        <option value="Thême 3">Thême 3</option>
                        <option value="Thême 4">Thême 4</option>
                  </select>
            </div>
            <div>
                  <label for="message">Message :</label>
                  <textarea id="message" name="user_message"></textarea>
            </div>
            <div class="button">
                  <button type="submit">Envoyer le message</button>
            </div>
      </form>

</body>

</html>