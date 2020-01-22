<?php

namespace Wf3;

use Wf3\ObjetInterface;

/**
 * La classe duel permet de lancer une confrotation entre 2 objets.
 *
 */
class Duel
{

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
  public function getGagnant(){

    if($this->_objet_01->detruit($this->_objet_02)){
      return $this->_objet_01;
    }
    elseif($this->_objet_02->detruit($this->_objet_01)){
      return $this->_objet_02;
    }
    else{
      return NULL;
    }
  }
}
