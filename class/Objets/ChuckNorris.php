<?php

namespace Wf3\Objets;

use Wf3\Objet;
use Wf3\ObjetInterface;

/**
 * Chuck Norris n'est pas réellement un objet (contrairement à
 * une Pierre ou à une Feuille.) mais pour que Notre classe
 * CHhuckNorris fonctionne avec le reste du système, il faut qu'elle
 * implémente l'interface ObjetInterface.
 */
class ChuckNorris implements ObjetInterface
{

  /**
   * @inheritdoc
   */
  public function nom(): string{
    return 'ChuckNorris';
  }

  /**
   * @inheritdoc
   */
  public function description(): string{
    return 'Chuck Norris Gagne. Toujours.';
  }

  /**
   * @inheritdoc
   */
  public function detruit(ObjetInterface $objet): bool{
    //Il n'y a pas match. chuck Norris gagne à chaque fois.
    return TRUE;
  }

  /**
   * @inheritdoc
   */
  public function vie(): int{
    //Chuck Norris à forcément 100 points de vie.
    return 100;
  }

}
