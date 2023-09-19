<!doctype html>
<html lang="fr">

<head>
  <title>Contactez-nous</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="contact.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
  <header>
  <h2><a href="welcome">FinanceLab</a></h2>
  </header>
<div id="secteur">
<div class="reseaux">
<h4>Contactez-nous</h4>
<a href="https://www.youtube.com/channel/UCQEEij_QPvyuBwYPE2HKLFw"><img src="media/icons8-lecture-de-youtube-48.png" alt="" width="30"></a>
<h5>Youtube</h5>
<br>
<a href="https://www.youtube.com/channel/UCQEEij_QPvyuBwYPE2HKLFw"><img src="media/facebook.png" alt="" width="30" class="img1"></a>
<h5>Facebook</h5>
<br>
<a href="https://www.youtube.com/channel/UCQEEij_QPvyuBwYPE2HKLFw"><img src="media/twitter.png" alt="" width="30" class="img2"></a>
<h5>Twitter</h5>
</div>
    <div  class="form">
    <form action="/contact" method="post">
        @csrf
        <label for="">E-mail</label>
        <input type="email" name="email" id="email" class="form-control" required>
        <label for="">Message</label>
        <textarea name="message" id="message"  class="form-control" required></textarea>
        <br>
        <input type="submit" value="Envoyez" name="envoyer" id="envoyer" class="form-control">
    </form>
    </div>
</div>
<br>
<br>
<br>
  <footer>
  <p>Copyright © 2023 Tous droits réservés</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>