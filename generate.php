<?php

require __DIR__ . '/vendor/autoload.php';

$dompdf = new Dompdf\Dompdf;

$dompdf->loadhtml('Hello World');

$dompdf->setPaper('A4', 'landscape');

$dompdf->render();

$dompdf->stream();

// $pdf = $dompdf->output();

// file_put_contents('doc.pdf', $pdf);
