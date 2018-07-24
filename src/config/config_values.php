<?php

return [
    'debug' => filter_var(getenv('DEBUG'), FILTER_VALIDATE_BOOLEAN),
    'example' => [
        'key' => 'value',
    ],
];
