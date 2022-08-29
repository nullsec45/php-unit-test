<?php
namespace Testing\Test;

use Program\Script\Counter;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase{
    private Counter $counter;

    protected function setUp():void{
        $this->counter=new Counter();
    }

    // public function testCounter(){
        // $counter=new Counter();
        // $counter->increment();

  
        // Mengecek jika nilainya 1, maka PHPUnitTest akan menghasilkan true
        // Kondisi di atas counter dijalankan sebanyak 1 kali artinya counter akan bernilai 1 
        // dan akan menghasilkan true

        // Assert::assertEquals(1, $counter->getCounterIncrement());

        // Sebenarnya TestCase turunan dari class Assert jadi kita bisa
        // manggil method assertEqualts dengan self atau this

        // $counter->increment();
        // self::assertEquals(2, $counter->getCounterIncrement());

    // }
    // annotation adalah metadata/informasi yang bisa dimasukkan ke dalam SC
    // annotation ditempatkan pada Doc Block (blok komentar)

    // Menggunakan annotation @test agar tidak usah menambahkan keyword test di depan nama method test

    /** 
    * @test
    */

    // public function decrement(){
    //     $counter=new Counter();
    //     $counter->decrement();

    //     self::assertEquals(9, $counter->getCounterIncrement());

    // }

    // public function testFirst():Counter{
    //     $counter=new Counter();
    //     $counter->increment();
    //     $this->assertEquals(1, $counter->getCounterIncrement());

    //     return $counter;
    // }

    // Melanjutkan pengecekan dari test sebelumnya.
    // Jika test sebelumnya gagal, maka test turunannya tidak akan dijalankan 
   // /**
   // * @depends testFirst
   // */

    // public function testSecond(Counter $counter) :void{

    //     $counter->increment();
    //     $this->assertEquals(2, $counter->getCounterIncrement());
    // }
    
 
    public function testIncrement(){
        $this->counter->increment();
        self::assertEquals(1, $this->counter->getCounterIncrement());

        // method markTestIncomplete=memberi tahu kepada PHPUnitTest bahwa test tersebut belum selesai, meskipun
        // terlihat benar dan sukses. Kode di bawah tes ini juga tidak akan dijalankan
        self::markTestIncomplete("TODO do counter again");
        
    }

    /**
     * @test
     */

    public function skip(){
        // Sama seperti markTestIncomplete(), script di bawahnya tidak akan dijalankan
        self::markTestSkipped("Method ini digunakan untuk skip test.");
        $this->counter->increment();
        self::assertEquals(1, $this->counter->getCounterIncrement());
    }

    /**
     * @requires OSFAMILY Linux
     */
    public function testOnlyLinux(){
        self::assertTrue(true, "Only in linux");
    }

    /**
     * @requires PHP >= 8
     */

     public function testOnlyPHP7(){
        self::assertTrue(true, "Only for PHP 7");
     }

    /**
     * @requires PHP >= 8
     * @requires OSFAMILY windows
     */
    public function testOnlyWindowAndPHP8(){
        self::assertTrue(true, "Only Windows and PHP8");
    }
}
