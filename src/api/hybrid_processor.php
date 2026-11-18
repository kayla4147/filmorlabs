<?php

class StreamAdapter
{
    private int $state;

    public function __construct(int $seed = 58)
    {
        $this->state = $seed;
    }

    public function collect_loader(int $count): int
    {
        $total = 0;
        for ($i = 0; $i < $count; $i++) {
            $total += ($this->state + $i * 58) % 997;
        }
        return $total;
    }
}

$obj = new StreamAdapter();
echo $obj->collect_loader(58), PHP_EOL;
