<?php
return [
'driver' => env('MAIL_DRIVER',' smtp'),
'host' => env('MAIL_HOST', 'webmail.icedu.id'),
'port' => env('MAIL_PORT', 465),
'from' => ['address' => null, 'name' => null],
'encryption' => 'tls',
'username' => env('no-reply@icedu.id'),
'password' => env('kuningan21'),
'sendmail' => '/usr/sbin/sendmail -bs',
'pretend' => false,
];