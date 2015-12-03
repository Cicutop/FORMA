<?php
class PdoForma
{
  private static $serveur='mysql:host=127.0.0.1';
  private static $bdd='dbname=forma';
  private static $user='root';
  private static $mdp='';

  public static $monpdo;
  private static monPdoForma = null;

  public function __construct()
  {
    PdoForma::$monPdo = new PDO(PdoForma::$serveur.';'.PdoForma::$bdd,PdoForma::user,PdoForma::mdp);
    PdoForma::$monPdo->querry("SET CHARACTER SET utf8");
  }
  public function _destruct()
  {
    PdoForma::monPdo = null;
  }
  /* Fonction statique qui crée l'instance de la classe */
  public static function getPdoForma()
  {
    if(PdoForma::$monPdoForma == null)
    {
      PdoForma::$monPdoForma = new PdoForma();
    }
    return PdoForma::$monPdoForma;
  }
}

 ?>
