<?php

return [
    'debug' => filter_var(getenv('DEBUG'), FILTER_VALIDATE_BOOLEAN),
    'mail' => [
        'address' => filter_var(getenv('MAIL_USERNAME')),
        'username' => filter_var(getenv('MAIL_USERNAME')),
        'password' => filter_var(getenv('MAIL_PASSWORD')),
        'host' => filter_var(getenv('MAIL_HOST')),
        'port' => filter_var(getenv('MAIL_PORT')),
        'smtp_auth' => filter_var(getenv('MAIL_AUTH'), FILTER_VALIDATE_BOOLEAN),
        'smtp_secure' => filter_var(getenv('MAIL_SECURE')),
        'name' => 'My name',
    ],
    'set_cookies' => true,
];
