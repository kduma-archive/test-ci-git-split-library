<?php

namespace TestCi\Library;

class Lib
{
    public function helloWorld(string $name = 'World'): string
    {
        return "Hello {$name}?";
    }
}
