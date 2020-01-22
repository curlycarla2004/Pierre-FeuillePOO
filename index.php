<?php

require 'vendor/autoload.php';

use Wf3\Duel;
use Wf3\ObjetInterface;

//On récupère de manière aéatoire 2 objets.
$objets = Duel::obtenirDeuxObjets();

$objet_01 = $objets[0];
$objet_02 = $objets[1];

//On cré le duel.
$duel_01 = new Duel($objet_01, $objet_02);

?>
<!DOCTYPE html>
<html lang="fr">
<?php require_once('include/head.php'); ?>

<body class="bg-light">

  <main class="vh-100">
    <div class="container h-100 d-flex flex-column justify-content-center py-5">

      <!-- Le Duel -->
      <div class="d-flex justify-content-center align-items-center">
        <div class="card shadow">
          <img src="<?php echo 'img/objets/'.strtolower($objet_01->nom()).'.jpg';?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title"><?php echo $objet_01->nom(); ?></h5>
            <p class="card-text text-muted"><?php echo $objet_01->description(); ?></p>
          </div>
        </div>
        <h2 class="px-5">VS</h2>
        <div class="card shadow">
          <img src="<?php echo 'img/objets/'.strtolower($objet_02->nom()).'.jpg';?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title"><?php echo $objet_02->nom(); ?></h5>
            <p class="card-text text-muted"><?php echo $objet_02->description(); ?></p>
          </div>
        </div>
      </div>

      <?php $gagnant = $duel_01->getGagnant(); ?>

      <!-- Le gagnant -->
      <div class="row pt-5 mt-5 justify-content-center">

        <?php if ($gagnant instanceof ObjetInterface): ?>
          <div class="alert alert-success col-5 text-center shadow" role="alert">
            Le gagnant est <strong><?php echo $gagnant->nom(); ?></strong> !
          </div>
          <?php else: ?>
            <div class="alert alert-warning col-5 text-center shadow" role="alert">
              C'est un match nul...
            </div>
        <?php endif; ?>
      </div>

    </div>
  </main>

</body>

</html>
