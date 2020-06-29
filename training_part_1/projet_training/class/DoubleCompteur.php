<?php
require_once 'Compteur.php';

// on ce sert de extends pour recuperer utilisé les proprieté de la class visé ici(Compteur)
class DoubleCompteur extends Compteur
{
    const INCREMENT = 10;

// Grace a lextends on peut ainsi recuperer la function 'recuperer' de la class compteur    
    public function recuperer(): int
    {
// on utilise '::parent' pour utilisé le fonctionement de la methode recuperer dont en changeant la valeur retourné
        return 2 * parent::recuperer();
    }

    
}
