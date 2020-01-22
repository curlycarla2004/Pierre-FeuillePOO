<?php

namespace Wf3;

use Wf3\ObjetInterface;

/**
 * La classe duel permet de lancer une confrotation entre 2 objets.
 *
 */
class Duel
{

  const OBJETS_DISPONIBLES = [
    'Wf3\Objets\Pierre',
    'Wf3\Objets\Feuille',
    'Wf3\Objets\Ciseaux'
  ];

  private $_objet_01;
  private $_objet_02;

  /**
   * Constructeur de la classe.
   * Qu'importe les objets passés en paramètres, il faut simplement qu'ils implémentent l'interface
   * ObjetInterface pour garantir le bon fonctionnement du duel.
   *
   * @param ObjetInterface $obj_01
   * @param ObjetInterface $obj_02
   */
  public function __construct(ObjetInterface $obj_01, ObjetInterface $obj_02)
  {
    $this->_objet_01 = $obj_01;
    $this->_objet_02 = $obj_02;
  }

  /**
   * On dédtermine le gagnant en fonction des propriétés de chacun des deux objets.
   */
  public function getGagnant()
  {
    if ($this->_objet_01->detruit($this->_objet_02)) {
      return $this->_objet_01;
    } elseif ($this->_objet_02->detruit($this->_objet_01)) {
      return $this->_objet_02;
    } else {
      switch (TRUE) {
        case $this->_objet_01->vie() > $this->_objet_02->vie():
          return $this->_objet_01;
          break;
        case $this->_objet_01->vie() < $this->_objet_02->vie():
          return $this->_objet_02;
          break;
          //S'il n'est ni superieur stric ni inferieur stric, alors il est égal.
        default:
          break;
      }
    }
  }

  /**
   * Instancie 2 objets de façon aléatoire et les retourne sous
   * forme de tableau.
   *
   * @return ObjetInterface[]
   */
  public static function obtenirDeuxObjets(): array
  {

    //Tous les types d'objets utilisables sont listés dans OBJETS_DISPONIBLES.
    //On récupère simplement un nom d'objet depuis ce tableau de manière aléatoire.
    $obj_01_class_name = self::OBJETS_DISPONIBLES[array_rand(self::OBJETS_DISPONIBLES)];
    $obj_02_class_name = self::OBJETS_DISPONIBLES[array_rand(self::OBJETS_DISPONIBLES)];

    //On créé un tableau contenant 2 objets.
    $objets = [
      new $obj_01_class_name(),
      new $obj_02_class_name(),
    ];

    //On retourne le qui contient les 2 objets.
    return $objets;
  }
}
