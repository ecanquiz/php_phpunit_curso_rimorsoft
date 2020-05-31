<?php
namespace App;

class User
{
    protected $name = "";
    protected $lastname = "";
    protected $email = "";

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setLastName($lastname)
    {
        $this->lastname = $lastname;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLastName()
    {
        return $this->lastname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getFullName()
    {
        return trim("$this->name $this->lastname");
    }

}
