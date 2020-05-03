<?php
    use Mpdf\Mpdf;

    require_once __DIR__ . '/vendor/autoload.php';

    $mpdf = new Mpdf();

    $css = file_get_contents('estilos.css');
    $html = file_get_contents('doc.html');

    $mpdf->WriteHTML($css, 1);
    $mpdf->WriteHTML($html);

    $mpdf->Output();
?>