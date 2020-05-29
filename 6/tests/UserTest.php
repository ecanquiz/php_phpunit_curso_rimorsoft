<?php

use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase
{

    public function test_i_can_the_name()
    {
        $user = new User;
        $user->setName("Ernesto");

        $this->assertEquals($user->getName(), "Ernesto");
    }

}
