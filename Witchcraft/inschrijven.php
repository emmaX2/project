<!doctype html>

<html lang="nl">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" href="./css/style.css">



<title>Inschrijven</title>

</head>

<body>

<main class="container">

<div class="row">

<div class="col-12">

<div class="jumbotron jumbotron-fluid">

<div class="container">

<h1 class="display-4">Inschrijfformulier</h1>

<p class="lead">Schrijf je hier in voor de opleiding witchcraft.</p>

</div>

</div>

</div>

</div>

<div class="row">

<div class="col-6">

<form action="./create.php" method="post">

<div class="form-group">

<label for="voornaam">Voornaam</label>

<input type="text" class="form-control" id="voornaam" aria-describedby="voornaamHelp" placeholder="Voornaam" name="voornaam">

</div>

<div class="form-group">

<label for=Achternaam">Achternaam</label>

<input type="text" class="form-control" id="Achternaam" aria-describedby="achternaamHelp" placeholder="Tussenvoegsel" name="achternaam">

</div>

<div class="form-group">

<label for="email">email</label>

<input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="email" name="email">


</div>

<div class="form-group">
  <label for="geboortedatum">geboortedatum</label>
  <div class="col-10">
    <input class="form-control" type="date" value="jjjj-mm-dd" id="geboortedatum">
  </div>
</div>

<div class="form-group">

<label for="telefoonnummer">telefoonnummer</label>

<input type="text" class="form-control" id="telefoonnummer" aria-describedby="telefoonHelp" placeholder="telefoonnummer" name="telefoonnummer">

</div>





<button type="submit" class="btn btn-primary">Stuur het op</button>

</form>

</div>


</div>



</main>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="./js/app.js"></script>

</body>

</html>

