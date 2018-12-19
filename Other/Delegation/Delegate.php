<?php

namespace DesignPatterns\Other\Delegation;

class Delegate
{
    /**
    * @param string $mail
    *
    * @return string
    */
    public function sendMail(string $mail): string
    {
        return "Mail sent: $mail";
    }
}
