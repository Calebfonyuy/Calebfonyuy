<?php

namespace Models;

class Mail {
    protected $to;
    protected $subject;
    protected $message;
    protected $headers;

    public function __construct($to, $subject, $message, $headers) {
        $this->to = $to;
        $this->subject = $subject;
        $this->message = $message;
        $this->headers = $headers;
    }

    public function send() {
        return mail($this->to, $this->subject, $this->message, $this->headers);
    }
}