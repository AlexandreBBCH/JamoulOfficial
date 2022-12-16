<?php
abstract class UserSystem
{
/**
 * nom
 * @var string
 */
public function __construct($name, $email, $password) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
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
}