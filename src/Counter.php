<?php
namespace Program\Script;

class Counter{
    private int $increment=0;
    private int $decrement=10;

    public function increment():void{
        $this->increment++;
    }

    public function decrement():void{
        $this->decrement--;
    }

    public function getCounterIncrement():int{
        return $this->increment;
    }

    public function getCounterDecrement():int{
        return $this->decrement;
    }
}