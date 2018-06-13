<?php

require __DIR__ . '/vendor/autoload.php';

$html = file_get_contents('teste1.html');

$options = new Dompdf\Options;

$options->set('defaultFont', 'Courier');

$dompdf = new Dompdf\Dompdf($options);

$dompdf->loadhtml($html);

$dompdf->setPaper('A4', 'portrait');

$dompdf->render();

// Download.
$dompdf->stream('teste1.pdf', array("Attachment" => false));
