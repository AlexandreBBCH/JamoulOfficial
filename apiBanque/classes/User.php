<?php
require_once 'UserSystem.php';
class User extends UserSystem
{
   


      public function getIdUser() {
        return $this->idUser;
      }

      public function setIdUser() {
        $this->idUser = $idUser;
      }


      public function getName() {
        return $this->name;
      }
    
      public function setName($nom) {
        $this->name = $name;
      }
    
      public function getEmail() {
        return $this->email;
      }
    
      public function setEmail($email) {
        $this->email = $email;
      }
    
      public function getPassword() {
        return $this->password;
      }
    
      public function setPassword($password) {
        $this->password = $password;
      }

      public function getPerm($permission) {
        $this->permission;
      }

      public function setPerm($permission) {
        $this->permission = $permission;
      }


    //   getSold(){

    //   }

  

}



