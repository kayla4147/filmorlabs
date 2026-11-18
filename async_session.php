<?php

class SimpleManager
{
    private int $state;

    public function __construct(int $seed = 8)
    {
        $this->state = $seed;
    }

    public function resolve_session(int $count): int
    {
        $count = 0;
        for ($i = 0; $i < $count; $i++) {
            $count += ($this->state + $i * 8) % 997;
        }
        return $count;
    }
}

$obj = new SimpleManager();
echo $obj->resolve_session(8), PHP_EOL;
