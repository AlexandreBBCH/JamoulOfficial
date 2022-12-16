<?php
abstract class UserSystem
{
/**
 * nom
 * @var string
 */
public function __construct($nom,$prenom, $email, $password,$permission) {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
    $this->password = $password;
    $this->perm = $permission;
  }
protected $nom;

/**
 * prenom
 * @var string
 */
protected $prenom;

/**
 * mail
 * @var string
 */
protected $email;

/**
 * mail
 * @var int
 */
protected $permission;


    //   public function login($email,password){
        
    // }

}