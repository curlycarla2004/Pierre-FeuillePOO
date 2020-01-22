<?php

namespace Wf3;

use Wf3\ObjetInterface;

/**
 * Objet est une classe abstraitre.
 * Elle sert simplement de 'patron' aux classes qui l'hériteront (ex; Ciseaux, Feuille ou Pierre).
 *
 * La différence avec une simple interface provient du fait qu'il est ossible de définir au niveau
 * de cette classe des méthodes qui du coup seront communes à toutes les sous-classes. ces méthodes
 * n'auront alors pas à être redéfinies dans les sous-classes.
 */
abstract class Objet implements ObjetInterface
{

  protected $nom = 'Objet';
  protected $description = 'Description de l\'objet.';
  protected $victime = 'Objet';

  /**
   * @inheritdoc
   */
  public function detruit(ObjetInterface $objet):bool{
    if ($objet instanceof $this->victime)
    return TRUE;
    else
    return FALSE;
  }

  /**
   * @inheritdoc
   */
  public function nom(): string{
    return $this->nom;
  }

  /**
   * @inheritdoc
   */
  public function description(): string{
    return $this->description;
  }
}
