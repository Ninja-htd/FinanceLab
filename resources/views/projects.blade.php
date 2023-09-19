<!doctype html>
<html lang="fr">

<head>
  <title>Information form</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="style.css">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
  <header>
  <h2><a href="welcome">FinanceLab</a></h2>
  </header>
  <br>
  <form action="/projects" method="post"> 
 @csrf
 @if(session()->has('Succes'))
<div class="alert alert-succes">{{ session('Succes') }}</div>
 @endif
    <h3>Information du projet</h3>
    <label for="">Type</label><br>
    <select name="type" id="type" class="form-control">
    <option value="Particulier">Particulier</option>
    <option value="Entreprise">Entreprise</option>
    </select>
    <br>
    <label for="">Nom</label>
    <input Required type="text" name="nom" id="nom" class="form-control">
    <br>
    <label for="">Secteur</label>
    <select name="secteur" id="secteur" class="form-control" Required>
        <option value="Technologie">Technologie</option>
        <option value="Transport">Transport</option>
        <option value="Testiaire">Testiaire</option>
        <option value="Voyage">Voyage</option>
        <option value="Agricole">Agricole</option>
    </select>
    <br>
    <label for="">Description</label>
    <textarea name="description" id="description" class="form-control" Required></textarea>
    <br>
    <label for="">Budget</label>
    <input Required type="number" name="budget" id="budget" class="form-control">
    <p style="text-align: center; color: red; margin-top: 5px"><span style="color:#000;">NB:</span> Le budget est évaluer en Fcfa</p>
    <input type="submit" value="Ajouter"class="form-control">
 </form>
 <br>
 <br>
 <footer>
  <p>Copyright © 2023 Tous droits réservés</p>
</footer>
<style>
  footer{
    padding: 5px;
    background: linear-gradient(rgb(5, 128, 228),rgb(60, 101, 197));
    width: auto;
}
footer p{
   color: #fff;
   text-align: center;
   margin-top: 10px;
}
</style>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>
</html>