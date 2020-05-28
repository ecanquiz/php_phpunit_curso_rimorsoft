<?php
use PHPUnit\Framework\TestCase;
class ExampleTest extends TestCase
{
    public function testTrue()
    {
        $this->assertTrue(true);
    }

    public function testFalse()
    {
        $value = false;
        $this->assertFalse(false);
        $this->assertFalse($value);
    }

    public function testEquals()
    {
        $result = 5 + 5;
        $this->assertEquals($result, "10"); //==
    }

    public function testSame()
    {
        $result = 5 + 5;
        $this->assertSame($result, 10); //===
    }

    public function testArray()
    {
        //$this->assertIsArray(null); // this version does not yet allow this method
        $this->assertInternalType('array', []);
    }

    public function testBool()
    {
        //$this->assertIsBool(true); // this version does not yet allow this method
        $this->assertInternalType('boolean', true);
    }

    public function testInt()
    {
        //$this->assertIsInt(10); // this version does not yet allow this method
        $this->assertInternalType('integer', 10);
        $this->assertInternalType('int', 10);
    }

    public function testString()
    {
        //$this->assertIsString("texto"); // this version does not yet allow this method
        $this->assertInternalType('string', "texto");
    }

    public function testEmpty()
    {
        $this->assertEmpty([]);
    }

    public function testCount()
    {
        $this->assertCount(2,['Amarillo', 'Azul']);
    }

    public function testHasKey()
    {
        $this->assertArrayHasKey('color',['color'=>'Azul']);
    }

}



