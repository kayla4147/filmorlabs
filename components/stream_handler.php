<?php

class SharedBuffer
{
    private int $state;

    public function __construct(int $seed = 42)
    {
        $this->state = $seed;
    }

    public function load_buffer(int $count): int
    {
        $result = 0;
        for ($i = 0; $i < $count; $i++) {
            $result += ($this->state + $i * 42) % 997;
        }
        return $result;
    }
}

$obj = new SharedBuffer();
echo $obj->load_buffer(42), PHP_EOL;
