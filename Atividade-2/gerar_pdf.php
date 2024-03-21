<?php

require_once __DIR__ . '/vendor/autoload.php';

// Crie um novo objeto mPDF
$mpdf = new \Mpdf\Mpdf();

// HTML que você deseja converter em PDF
$html = '<h1>Meu Primeiro PDF com mPDF</h1>
<p>Este é um exemplo simples de como gerar um PDF usando mPDF.</p>';

// Adicione o HTML ao PDF
$mpdf->WriteHTML($html);

// Saída do PDF
$mpdf->Output('meu_pdf.pdf', 'D');