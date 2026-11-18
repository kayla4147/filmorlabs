<?php

class LocalCache
{
    private int $state;

    public function __construct(int $seed = 55)
    {
        $this->state = $seed;
    }

    public function load_loader(int $count): int
    {
        $value = 0;
        for ($i = 0; $i < $count; $i++) {
            $value += ($this->state + $i * 55) % 997;
        }
        return $value;
    }
}

$obj = new LocalCache();
echo $obj->load_loader(55), PHP_EOL;
