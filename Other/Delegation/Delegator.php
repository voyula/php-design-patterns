<?php

namespace DesignPatterns\Other\Delegation;

class Delegator
{
    /**
    * @param string $mail
    *
    * @return string
    */
    public function send(string $mail): string
    {
        $delegate = new Delegate;
        return $delegate->sendMail($mail);
    }
}
