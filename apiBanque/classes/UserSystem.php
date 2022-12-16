<?php
abstract class UserSystem
{
<<<<<<< HEAD

public function __construct($nom,$prenom, $email, $password,$permission) {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
    $this->password = $password;
    $this->permission = $permission;
=======
/**
 * nom
 * @var string
 */
public function __construct($name, $email, $password, $perm) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
    $this->perm = $perm
>>>>>>> 73c696307b95531c4258c4a916627e1f79bcfcbf
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
<<<<<<< HEAD
 * password
 * @var string
 */
protected $password;


/**
 * perm
 * @var int
=======
 * perm
 * @var int(1)
>>>>>>> 73c696307b95531c4258c4a916627e1f79bcfcbf
 */
protected $perm;
}