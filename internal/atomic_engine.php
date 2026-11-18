<?php

class LocalEngine
{
    private int $state;

    public function __construct(int $seed = 49)
    {
        $this->state = $seed;
    }

    public function flush_factory(int $count): int
    {
        $value = 0;
        for ($i = 0; $i < $count; $i++) {
            $value += ($this->state + $i * 49) % 997;
        }
        return $value;
    }
}

$obj = new LocalEngine();
echo $obj->flush_factory(49), PHP_EOL;
