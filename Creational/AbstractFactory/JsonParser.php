<?php

namespace DesignPatterns\Creational\AbstractFactory;

class JsonParser implements ParserInterface
{
    public function parse(string $input): array
    {
        return json_decode($input, true);
    }
}
