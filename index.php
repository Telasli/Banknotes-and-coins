<?php

function renduMonnaie($montant)
{
  // Création de 2 tableau l'un avec la monnaie et l'autre pour mettre les resultats 
    $tableau = array(50, 20, 10, 5, 1, 2, 0.5, 0.2, 0.1);
    $tableau2 = array(0, 0, 0, 0, 0, 0, 0, 0, 0);

// Fonction pour compter la monnaie a rendre 
    for ($i = 0; $i < 9; $i++)
    {
        // On compare les 2 tableau 
        if ($montant >= $tableau[$i])
        {
            $tableau2[$i] = (int) ($montant /
                                      $tableau[$i]);
            $montant = $montant -
                      $tableau2[$i] *
                      $tableau[$i];
        }
    }
// On affiche les billet et pieces a rendre 
    echo ("Somme ->"."\n");
    for ($i = 0; $i < 9; $i++)
    {
        if ($tableau2[$i] != 0)
        {
            echo ($tableau[$i] . " : " .
                  $tableau2[$i] . "\n");
        } 
    }                


}
 

$montant = 110.20;
renduMonnaie($montant);

?>  