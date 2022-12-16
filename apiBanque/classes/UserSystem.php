<?php
abstract class UserSystem
{

public function __construct($nom,$prenom, $email, $password,$permission) {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
    $this->password = $password;
    $this->permission = $permission;
  }

  /**
 * nom
 * @var string
 */
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
 * password
 * @var string
 */
protected $password;


/**
 * perm
 * @var int
 */
protected $permission;


    //   public function login($email,password){
        
    // }

}