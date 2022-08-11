<?php
namespace Testing\Test;

use Program\Script\Counter;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase{
    public function testCounter(){
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

    }
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

    public function testFirst():Counter{
        $counter=new Counter();
        $counter->increment();
        $this->assertEquals(1, $counter->getCounterIncrement());

        return $counter;
    }

    // Melanjutkan pengecekan dari test sebelumnya.
    // Jika test sebelumnya gagal, maka test turnannya tidak akan dijalankan 
    /**
    * @depends testFirst
    */
    public function testSecond(Counter $counter) :void{

        $counter->increment();
        $this->assertEquals(2, $counter->getCounterIncrement());
    }

}
