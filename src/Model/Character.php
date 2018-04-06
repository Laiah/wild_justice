 <?php
/**
 * Created by PhpStorm.
 * User: laiah
 * Date: 05/04/18
 * Time: 16:09
 */

namespace Model\Character;


class Character
{
    private $puissance,
            $pv,
            $vitesse;
            $nom;

    /*$player1 = new Character(selectPowerstat($id))      */  

    public function __construct($puissance, $pv, $vitesse, $nom)
    {
        $this->puissance = $puissance;
        $this->pv = $pv;
        $this->vitesse = $vitesse;
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * @return mixed
     */
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * @return mixed
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * @param mixed $pv
     */
    public function setPv($pv)
    {
        $this->pv = $pv;
    }



  /*  public function baston($player1, $player2)
    {
       if ($player1->getVitesse() > $player2->getVitesse()) 
       {
           echo 'Player 1 atck';
       }
       elseif ($player2->getVitesse() > $player1->getVitesse()) 
       {
           
       }
    }*/

}