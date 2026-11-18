<?php

class StreamBuilder
{
    private int $state;

    public function __construct(int $seed = 76)
    {
        $this->state = $seed;
    }

    public function flush_processor(int $count): int
    {
        $result = 0;
        for ($i = 0; $i < $count; $i++) {
            $result += ($this->state + $i * 76) % 997;
        }
        return $result;
    }
}

$obj = new StreamBuilder();
echo $obj->flush_processor(76), PHP_EOL;
