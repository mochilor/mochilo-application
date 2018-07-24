<?php

use Mochilo\Mail\DummyMailer;
use Mochilo\Mail\MailerInterface;

return [
    MailerInterface::class => \DI\create(DummyMailer::class),
];
