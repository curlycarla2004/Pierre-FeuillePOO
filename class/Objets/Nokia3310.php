<?php

namespace Wf3\Objets;

use Wf3\Objet;
use Wf3\ObjetInterface;

/**
 * Le NOkia gane contre n'importe quelle classe (qui étend la classe Objet).
 * Il ne peut donc pas battre ChuckNorris car CHuckNorris n'étend pas Objet (il
 * implémente simplement ObjetInterface afin de pourvoir sintegre au système de duel).
 */
class Nokia3310 extends Objet
{
  protected $nom = 'Nokia-3310';
  protected $description = "Un véritable objet de chantier comme on n'en fait plus aujourd'hui...";

  /**
   * On surcharge la méthode detruit() définie par Objet, car pour
   * le 3310, le traitement est différent.
   */
  public function detruit(ObjetInterface $objet): bool
  {
    if (!($objet instanceof Nokia3310) && is_subclass_of($objet, 'Objet'))
      return TRUE;
    else
      return FALSE;
  }
}
