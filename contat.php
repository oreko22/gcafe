<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/style.css" rel="stylesheet">

   
</head>
<body>
<form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="nom" class="form-control" placeholder="Votre Nom" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" placeholder="Votre E-mail" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="objet"  placeholder="Objet" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Ecrire un Message" required></textarea>
          </div>
          
          <div class="text-center"><button type="submit">Envoyer</button></div>
        </form>
</body>
</html>