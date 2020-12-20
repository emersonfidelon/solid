<?php

namespace App;

class EmailService
{
    private $from;
    private $to;
    private $subject;
    private $content;

    public function __construct(
        string $from = 'contato@site.com.br', 
        string $to = '', 
        string $subject = '', 
        string $content = ''
    ) {
        $this->from = $from;
        $this->to = $to;
        $this->subject = $subject;
        $this->content = $content;
    }

    public static function send() {
        return "--- Send email ---";
    }
}