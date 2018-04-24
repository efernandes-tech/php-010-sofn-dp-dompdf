<?php

require __DIR__ . '/vendor/autoload.php';

$result = require('doc.php');

$options = new Dompdf\Options;

$options->set('defaultFont', 'Courier');

$dompdf = new Dompdf\Dompdf($options);

$dompdf->loadhtml($result);

$dompdf->setPaper('A4', 'landscape');

$dompdf->render();

// $dompdf->stream();

$pdf = $dompdf->output();

file_put_contents('doc.pdf', $pdf);
file_put_contents('doc.html', $result);
