<?php

namespace Wf3;

interface ObjetInterface{

  /**
   * Retourne le nom d'un objet.
   *
   * @return string
   */
  public function nom(): string;

  /**
   * Retourne la description d'un objet.
   *
   * @return string
   */
  public function description(): string;

  /**
   * Indique si l'objet peut détruire l'objet passé en paramètre.
   *
   * @return bool
   */
  public function detruit(ObjetInterface $objet): bool;
}
