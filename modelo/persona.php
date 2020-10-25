<?php       
//Ponemos abstract para que no nos deje hacer un new
abstract class Persona{
    //es protected porque es padre y queremos que lo vean los hijos
    protected $id;
    protected $email;
    protected $password;

    function __construct($email,$password) {
        $this->email=$email;
        $this->password=$password;
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
        return $this;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
        return $this;
    }

    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password = $password;
        return $this;
    }


}

?>