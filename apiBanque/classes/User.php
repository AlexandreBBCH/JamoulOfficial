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
    
      public function setName($name) {
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
}

<<<<<<< HEAD

=======
$compteUser = new User(1,'Jamoul','JamoulOfficial@gmail.com',1234567);
>>>>>>> 73c696307b95531c4258c4a916627e1f79bcfcbf

