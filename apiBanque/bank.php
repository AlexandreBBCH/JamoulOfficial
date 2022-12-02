<?php

require_once 'classes/Compte.php';
require_once 'classes/CompteCourant.php';
require_once 'classes/CompteEpargne.php';
echo "Compte Courant 1 :";
var_dump($compte1);
echo "Compte Courant 2 :"; 
var_dump($compte2);
echo "Get Découvert : "; 
var_dump($compte1->getDecouvert());
echo "Set Découvert : "; 
var_dump($compte2->setDecouvert(500));
echo "---------------------------------------------<br>";
echo "Compte Epargne 1 :";
var_dump($compteE1);
echo "Compte Epargne 2 :";
var_dump($compteE2);
echo "Verser Intêrets :";
$compteE1->verserInterets();
var_dump($compteE1);
echo "Get Taux :";
var_dump($compteE2->getTauxInterets());
echo "Set Taux :";
var_dump($compteE1->setTauxInterets(3));

?>