<!doctype html>
<html lang="fr">
<head>
  <title>Liste des projects</title>
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
 <div class="feliciter"><h2>FÉLICITATION</h2></div>
 <p id="litessucces">La liste des projects suivant sont les projects sélectionner  par nos experts en la matière après analyse. Vous bénéficierai du plein financement rester donc informé.</p>
 <br>
 <table>
  <thead>
    <tr>
      <th>Type</th>
      <th>Nom d'entreprise</th>
      <th>Secteur</th>
      <th>Description</th>
      <th>Budget total</th>
    </tr>
  </thead>
 @foreach(App\Models\project::all() as $project)
  <tbody>
    <tr>
      <td>{{ $project->type}}</td>
      <td>{{ $project->nom}}</td>
      <td>{{ $project->secteur}}</td>
      <td>{{ $project->descrition}}</td>
      <td>{{ $project->budget}} Fcfa</td>
    </tr>
  </tbody>
 @endforeach
 </table>
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