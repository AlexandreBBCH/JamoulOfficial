<?php
abstract class UserSystem
{

public function __construct($idUser,$nom, $prenom, $email, $password, $perm = 0) {
    $this->idUser = $idUser;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
    $this->password = $password;
    $this->perm = $perm;
  }

   /*
 * idUser
 * @var idUser
 */
protected $idUser;

  /*
 * nom
 * @var string
 */
protected $nom;


  /*
 * prenom
 * @var string
 */
protected $prenom;

  /*
 * mail
 * @var string
 */

protected $email;
  /*
 * password
 * @var string
 */

protected $password;
/**
 * perm
 * @var int(1)
 */

protected $perm;
}