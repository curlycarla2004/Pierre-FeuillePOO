<?php

namespace Wf3\Objets;

use Wf3\Objet;

class Feuille extends Objet
{
  protected $nom = 'Feuille';
  protected $description = 'La feuille recouvre la pierre !';
  protected $victime = 'Wf3\Objets\Pierre';
}
