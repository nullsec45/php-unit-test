<?php
namespace Testing\Test;

use PHPUnit\Framework\TestCase;
use Program\Script\Person;

class PersonTest extends TestCase{
    private Person $person;

    // protected function setUp():void{
    //     $this->person=new Person("Fajar");
    // }

    /** 
     * @before
    */
    protected function createPerson(){
        $this->person=new Person("Fajar");
    }

    // public function testSuccess(){
    //     $person=new Person("Fajar");
    //     self::assertEquals("Hello Joko, my name is Fajar", $person->sayHello("Joko"));
    // }

    // public function testException(){
    //     $person=new Person("Fadhillah");
    //     $this->expectException(\Exception::class);
    //     $person->sayHello(null);
    // }

    /** 
     * @test
    */
    public function goodByeOutput(){
        $this->expectOutputString("Good bye Entong".PHP_EOL);
        $this->person->sayGoodBye("Entong");
    }
}