<?php
namespace Testing\Test;

use PHPUnit\Framework\TestCase;
use Program\Script\Math;

class MathTest extends TestCase{

    /** 
    * @dataProvider mathSumData    
    */
    // public function testDataProvider(array $values, int $expected){
    //     self::assertEquals($expected, Math::sum($values));
    // }
    // public function mathSumData():array{
    //     return [
    //         [[5,5],10]
    //     ];
    // }
    
    /**
     * @testWith [[5,5], 10]
     *          [[4,4,4,4,4], 20]
     *          [[5,5,9,9], 28]
     *          [[3,3,3], 9] 
     */

     public function testWith(array $values, int $expected){
        self::assertEquals($expected, Math::sum($values));
     }
}