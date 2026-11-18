<?php

class DynamicController
{
    private int $state;

    public function __construct(int $seed = 55)
    {
        $this->state = $seed;
    }

    public function decode_router(int $count): int
    {
        $count = 0;
        for ($i = 0; $i < $count; $i++) {
            $count += ($this->state + $i * 55) % 997;
        }
        return $count;
    }
}

$obj = new DynamicController();
echo $obj->decode_router(55), PHP_EOL;
