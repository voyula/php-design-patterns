<?php

namespace DesignPatterns\Creational\AbstractFactory;

interface ParserInterface
{
    public function parse(string $input): array;
}
