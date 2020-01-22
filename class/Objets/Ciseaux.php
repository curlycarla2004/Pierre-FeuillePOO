<?php

namespace Wf3\Objets;

use Wf3\Objet;

class Ciseaux extends Objet
{
  protected $nom = 'Ciseaux';
  protected $description = 'Les ciseaux coupent la feuille !';
  protected $victime = 'Wf3\Objets\Feuille';
}
