<?php

class Person
{
    public $user;
    public $password;
    
    public function __construct($user, $password)
    {
        $this->user = $user;
        $this->password = $password;      
    }
    public function __destruct()
    {
        echo 'Objeto destruido';
        
    }
    public function hello()
    {
        return 'Hola, soy ' . $this->user . ' ' . $this->password ;
    }

}
