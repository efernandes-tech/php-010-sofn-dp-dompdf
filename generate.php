<?php

require __DIR__ . '/vendor/autoload.php';

$result = require('doc.php');

$options = new Dompdf\Options;

$options->set('defaultFont', 'Courier');

$dompdf = new Dompdf\Dompdf($options);

$dompdf->loadhtml($result);

$dompdf->setPaper('A4', 'landscape');

$dompdf->render();

// Download.
// $dompdf->stream();

$pdf = $dompdf->output();

// Salvar arquivo.
file_put_contents('doc.pdf', $pdf);
// Tmb gerar o html para debugar.
file_put_contents('doc.html', $result);
