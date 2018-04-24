<?php

$users = [
    [
        'name' => 'Éderson',
        'email' => 'edersonluis.rf@gmail.com',
    ],
    [
        'name' => 'Luis',
        'email' => 'teste@teste.com',
    ],
];

$html = '';
foreach ($users as $user) {
    $html .= '<li>' . $user['name'] . ' - ' . $user['email'] . '</li>';
}

$template = '
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style>
        li {
            color: red;
        }
    </style>
</head>
<body>
    <ul>
        {{user}}
    </ul>
</body>
</html>
';

return str_replace('{{user}}', $html, $template);
