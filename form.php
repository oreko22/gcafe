<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
<form action="book.php" method="POST" >
    <div class="row">
      <div class="col-lg-4 col-md-6 form-group">
        <input type="text" name="nom" class="form-control" required  placeholder="Votre Nom" >
        <div class="validate"></div>
      </div>
      <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
        <input type="email" class="form-control" name="email" required  placeholder="Votre email" >
        <div class="validate"></div>
      </div>
      <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
        <input type="tel" class="form-control" name="telephone" required  placeholder="Votre Telephone" >
        <div class="validate"></div>
      </div>
      <div class="col-lg-4 col-md-6 form-group mt-3">
        <input type="date" name="date" class="form-control" required  placeholder="Date" >
        <div class="validate"></div>
      </div>
      <div class="col-lg-4 col-md-6 form-group mt-3">
        <input type="time" class="form-control" name="heure" required  placeholder="Heures" >
        <div class="validate"></div>
      </div>
      <div class="col-lg-4 col-md-6 form-group mt-3">
        <input type="number" class="form-control" name="nombre" required  placeholder="Nombre de personnes" >
        <div class="validate"></div>
      </div>
    </div>
    <div class="form-group mt-3">
      <textarea class="form-control" name="message" required rows="5" placeholder="Message"></textarea>
      <div class="validate"></div>
    </div>
    
    <div style=" margin-top: 30px; text-align: center;" ><button type="submit">Envoyer</button> </div>
  </form>

</body>
</html>