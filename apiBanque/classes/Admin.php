<?php
require_once 'UserSystem.php';
class Admin extends UserSystem
{
    public function displayUserBalanceCourant($idUser, $idCompteCourant){
      $this->idUser = $idUser;
      $this->idCompteCourant = $idCompteCourant;
      // Retrieve the CompteCourant object for the specified user and account ID
      $compteCourant = CompteCourant::getById($idUser, $idCompteCourant);

      // Display the balance
      echo 'Solde du compte courant : ' . $compteCourant->getSolde();

    }
}
$i = 0;
$admin = new Admin($i+=1, "Jamoule","Official", "jamoule@gmail.com", "jojo", "3");  
