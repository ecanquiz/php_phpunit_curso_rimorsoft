<?php
namespace App;

class User
{
    protected $name = "";
    protected $lastname = "";

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setLastName($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLastName()
    {
        return $this->lastname;
    }


    

}
