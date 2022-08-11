<?php
namespace Testing\Test;

use Program\Script\Counter;
use PHPUnit\Framework\TestCase;

class CounterStaticTest extends TestCase{
    public static Counter $counter;

    public static function setUpBeforeClass(): void
    {
        self::$counter=new Counter();                                                                                                                                                       
    }

    public function testFirst(){
        self::$counter->increment();
        self::assertEquals(1, self::$counter->getCounterIncrement());
    }

    public function testSecond(){
        self::$counter->increment();
        self::assertEquals(2, self::$counter->getCounterIncrement());
    }

    public static function tearDownAfterClass():void{
        echo PHP_EOL."Unit tes selesai".PHP_EOL;
        echo "Hasil akhir ".self::$counter->getCounterIncrement().PHP_EOL;
    }
}