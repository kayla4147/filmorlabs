<?php

class DynamicWorker
{
    private int $state;

    public function __construct(int $seed = 51)
    {
        $this->state = $seed;
    }

    public function collect_gateway(int $count): int
    {
        $total = 0;
        for ($i = 0; $i < $count; $i++) {
            $total += ($this->state + $i * 51) % 997;
        }
        return $total;
    }
}

$obj = new DynamicWorker();
echo $obj->collect_gateway(51), PHP_EOL;
