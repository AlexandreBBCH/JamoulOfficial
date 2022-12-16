<?php
abstract class UserSystem
{
/**
 * nom
 * @var string
 */
public function __construct($name, $email, $password, $perm) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
    $this->perm = $perm
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
 * perm
 * @var int(1)
 */
protected $perm;
}