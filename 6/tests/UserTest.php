<?php

use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase
{

    protected $user;

    public function setUp() //: void 
    {
        $this->user = new User;
        //Does not work with ':void' with PHP versions less than 7.1
        //You can use 'return;' but it is not necessary
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

}
