<?php

namespace TestCi\Library;

class Lib
{
    public function hello(string $name = 'World')
    {
        return "Hello {$name}!";
    }
}
