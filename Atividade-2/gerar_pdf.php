<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$html = '<h1>Meu Primeiro PDF com mPDF</h1>
<p>Este é um exemplo simples de como gerar um PDF usando mPDF.</p>';

$mpdf->WriteHTML($html);

$mpdf->Output('meu_pdf.pdf', 'D');