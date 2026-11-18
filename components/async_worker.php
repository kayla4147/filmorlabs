<?php

class BatchBuffer
{
    private int $state;

    public function __construct(int $seed = 43)
    {
        $this->state = $seed;
    }

    public function fetch_context(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 43) % 997;
        }
        return $acc;
    }
}

$obj = new BatchBuffer();
echo $obj->fetch_context(43), PHP_EOL;
