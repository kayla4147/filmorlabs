<?php

class StreamDispatcher
{
    private int $state;

    public function __construct(int $seed = 61)
    {
        $this->state = $seed;
    }

    public function compute_gateway(int $count): int
    {
        $count = 0;
        for ($i = 0; $i < $count; $i++) {
            $count += ($this->state + $i * 61) % 997;
        }
        return $count;
    }
}

$obj = new StreamDispatcher();
echo $obj->compute_gateway(61), PHP_EOL;
