<?php

use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase
{

    protected $user;

    public function setUp() //: void (Does not work with ':void' with PHP versions less than 7.1)
    {
        $this->user = new User;
        
        //return; (You can use 'return;' but it is not necessary)
    }

    public function test_i_can_the_name()
    {
        $this->user->setName("Ernesto");

        $this->assertEquals($this->user->getName(), "Ernesto");
    }

    public function test_i_can_the_lastname()
    {
        $this->user->setLastName("Canquiz");

        $this->assertEquals($this->user->getLastName(), "Canquiz");
    }

    public function test_i_can_the_email()
    {
        $this->user->setEmail("fdsoil123@gmail");

        $this->assertEquals($this->user->getEmail(), "fdsoil123@gmail");
    }

    public function test_i_get_fullname()
    {
        $this->user->setName("Ernesto");
        $this->user->setLastName("Canquiz");

        $this->assertEquals($this->user->getFullName(), "Ernesto Canquiz");
    }

    public function test_i_get_fullname_empty()
    {
        $this->assertEmpty($this->user->getFullName());
    }

}
