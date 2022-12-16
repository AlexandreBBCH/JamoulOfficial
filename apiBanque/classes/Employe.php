<?php
require_once 'UserSystem.php';
class Employe extends UserSystem
{

    public function displayUserBalanceCourant($idUser, $idCompteCourant){
        $this->idUser = $idUser;
        $this->idCompteCourant = $idCompteCourant;
        // Retrieve the CompteCourant object for the specified user and account ID
        $compteCourant = CompteCourant::getById($idUser, $idCompteCourant);
  
        // Display the balance
        echo 'Solde du compte courant : ' . $compteCourant->getSolde();
  
      }

    // public function DisplayUserBalanceEpargne() {

    // }
    // public function AddToUserBalanceCourant() {

    // }
    // public function AddToUserBalanceEpargne() {

    // }
    // public function TakeToUserBalanceCourant() {

    // }
    // public function TakeToUserBalanceEpargne() {

    // }
    // public function PayIntern() {

    // }
    // public function PayExtern() {

    // }
    // public function SetRoof() {

    // }
    // public function SetRoofGuest() {

    // }
    // public function SetTaux() {

    // }


}

