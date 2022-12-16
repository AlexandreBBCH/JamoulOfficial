<?php
require_once 'UserSystem.php';
class User extends UserSystem
{
    function DisplayBalanceCourant($idUser,$idCompteCourant){
            
    }
    function DisplayBalanceEpargne($idUser,$idCompteEpargne){
    
    }
    function AddToBalanceCourant($idUser,$idCompteCourant,$addedMoney){
    
    }
    function AddToBalanceEpargne($idUser,$idCompteEpargne,$addedMoney){
    
    }
    function TakeToBalanceCourant($idUser,$idCompteEpargne,$takeMoney){
    
    }
    function TakeToBalanceEpargne($idUser,$idCompteEpargne,$takeMoney){
    
    }
    function TransfertIntern($idUser,$idCompteTransferer,$idCompteReceveur){
    
    }
    function PayExtern($idUser,$idCompte,$idCompteExterne,$pay,$idTransaction){
    
    }


}

$utilisateur1 = new User("1","Jamoule","Official", "jamoule@gmail.com", "jojo", "1");


