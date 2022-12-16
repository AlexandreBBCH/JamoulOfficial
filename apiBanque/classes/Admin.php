<?php
require_once 'UserSystem.php';
class Admin extends UserSystem
{
    public function displayUserBalanceCourant($idUser, $idCompteCourant){
      $this->idUser = $idUser;
      $this->idCompteCourant = $idCompteCourant;
    }

}
$admin = new Admin("Jamoule","Jamoule@gmail.com", "jamoule");
