<?php

// Dados.
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

// Preparação.
$html = '';
foreach ($users as $user) {
    $html .= '<li>' . $user['name'] . ' - ' . $user['email'] . '</li>';
}

$template = file_get_contents('template.html');

return str_replace('{{user}}', $html, $template);
