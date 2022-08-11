<?php
namespace Testing\Test;

use PHPUnit\Framework\TestCase;
use Program\Script\Person;

class PersonTest extends TestCase{
    private Person $person;

    protected function setUp():void{
     echo "This is Set up".PHP_EOL;
    }

    /** 
     * @before
    */
    protected function createPerson(){
        $this->person=new Person("Fajar");
    }

    public function testSuccess(){
        self::assertEquals("Hello Joko, my name is Fajar", $this->person->sayHello("Joko"));
    }

    // public function testException(){
    //     $person=new Person("Fadhillah");
    //     $this->expectException(\Exception::class);
    //     $person->sayHello(null);
    // }

    /** 
     * @test
    */
    // public function goodByeOutput(){
    //     $this->expectOutputString("Good bye Entong".PHP_EOL);
    //     $this->person->sayGoodBye("Entong");
    // }


    public function tearDown():void{
        echo "This is TearDown".PHP_EOL;
    }

    /**
     * @after
     */
    protected function after():void{
        echo "After".PHP_EOL;
    }
}