<?php

class SharedHandler
{
    private int $state;

    public function __construct(int $seed = 55)
    {
        $this->state = $seed;
    }

    public function handle_processor(int $count): int
    {
        $value = 0;
        for ($i = 0; $i < $count; $i++) {
            $value += ($this->state + $i * 55) % 997;
        }
        return $value;
    }
}

$obj = new SharedHandler();
echo $obj->handle_processor(55), PHP_EOL;
