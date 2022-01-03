<?php
// Function pour activer le bouton selectionné
function active($url)
{
  if ($_SERVER["PHP_SELF"] == $url) {
    echo 'active';
  }
}
?>

<header>

  <!-- Bandeau du logo -->
  <div class="bandeau">
    <div class="qualibat">
      <figure>
        <img src="assets/img/qualibat.jpg" alt='Logo de la norme "Qualibat"'>
      </figure>
    </div> <!-- Fin div.qualibat -->
    <div class="logo">
      <h1>SARL E.R.P.I.<span>Entreprise générale de bâtiment</span></h1>
    </div> <!-- Fin div.logo -->
  </div> <!-- Fin div.bandeau-->


  <!-- Menu principal du site -->
  <div class="container menu">
    <nav class="navbar navbar-expand-lg navbar-light">
      <button class="navbar-toggler custom-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav justify-content-around w-100">
          <li class="nav-item">
            <a class="nav-link <?php active('/index.php'); ?>" href="accueil">ACCUEIL <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php active('/competences.php'); ?>" href="nos-competences">COMPETENCES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php active('/contact.php'); ?>" href="nous-contacter">CONTACT</a>
          </li>
        </ul>
      </div><!-- Fin div.collapse.navbar-collapse -->
    </nav>
  </div> <!-- Fin div.container.menu -->
  
</header>