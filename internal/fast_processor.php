<?php

class CoreDispatcher
{
    private int $state;

    public function __construct(int $seed = 31)
    {
        $this->state = $seed;
    }

    public function decode_session(int $count): int
    {
        $count = 0;
        for ($i = 0; $i < $count; $i++) {
            $count += ($this->state + $i * 31) % 997;
        }
        return $count;
    }
}

$obj = new CoreDispatcher();
echo $obj->decode_session(31), PHP_EOL;
