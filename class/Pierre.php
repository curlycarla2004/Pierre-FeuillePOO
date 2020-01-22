<?php

namespace Wf3\Objets;

use Wf3\Objet;

class Pierre extends Objet
{
  protected $nom = 'Pierre';
  protected $description = 'La pierre casse les ciseaux !';
  protected $victime = 'Wf3\Objets\Ciseaux';
}
