<!doctype html>
<html lang="en">
  <head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

      </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">


  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item  <?php if($_SERVER['SCRIPT_NAME'] ==="/index.php"): ?> active <?php endif; ?>">
        <a class="nav-link" href="index.php">Accueil </a>
      </li>
      <li class="nav-item  <?php if($_SERVER['SCRIPT_NAME'] ==="/contact.php"): ?> active <?php endif; ?>">
        <a class="nav-link" href="contact.php">Contact </a>
      </li>
      <li class="nav-item  <?php if($_SERVER['SCRIPT_NAME'] ==="/profil.php"): ?> active <?php endif; ?>">
        <a class="nav-link" href="profil.php">Profil </a>
      </li>
      </ul>

  </div>
</nav>
