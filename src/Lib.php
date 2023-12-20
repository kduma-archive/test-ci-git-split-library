<?php

namespace TestCi\Library;

class Lib
{
    public function helloWorld(string $name = 'World', bool $question = true): string
    {
        return sprintf("Hello %s%s", $name, $question ? '?' : '.');
    }
}
