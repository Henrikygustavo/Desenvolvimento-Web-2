<?php

require_once __DIR__ . '/vendor/autoload.php';

// Crie uma nova instância do mPDF
$mpdf = new \Mpdf\Mpdf();

// Adicione algum conteúdo ao PDF (opcional)
$mpdf->WriteHTML('<h1>Hello World!</h1>');

// Gere o PDF
$mpdf->Output('meu_arquivo.pdf', 'D');
