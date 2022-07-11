<?php
include_once("../../classes/manipuladados.php");
require("../fpdf/fpdf.php");

$manipula = new manipuladados();
$manipula->setTable("tb_produtos");
$manipula->setFields("id, nome, descricao, preco, url, id_categorias");

$produtos = $manipula->getAllProdutos();

$pdf = new FPDF("P", "pt", "A4");
$pdf->SetFont('Arial', 'B', 12);
$pdf->AddPage();

$pdf->MultiCell(0, 20, utf8_decode("Relatório de Produtos"), 0, "J", false);
$pdf->Ln(10);

// Cabeçalho
$cabecalhoDados = ["ID", "Categoria", "Nome", utf8_decode("Preço (R$)")];
foreach ($cabecalhoDados as $dado) {
    $pdf->Cell(90, 16, $dado, 1);
}

$pdf->Ln();

// Dados
$pdf->SetFont('Arial', '', 12);
foreach ($produtos as $produto) {
    $id = $produto["id"];
    $categoria = utf8_decode($produto["categoria_nome"]);
    $nome = utf8_decode($produto["nome"]);
    $preco = utf8_decode($produto["preco"]);
    $dados = [$id, $categoria, $nome, $preco];
    foreach ($dados as $dado) {
        $pdf->Cell(90, 16, $dado, 1);
    }
    $pdf->Ln();
}

$consulta = new manipuladados();
$consulta->setTable("tb_produtos");

$resultado =
    $consulta->getAllDataTableElements("SUM(tb_produtos.preco) AS preco_em_estoque")[0];

$precoEmEstoque = $resultado["preco_em_estoque"];

// Preço total em estoque
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(160, 16, utf8_decode("Preço total em estoque"), 1);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(200, 16, utf8_decode("R$ " . $precoEmEstoque), 1);

$pdf->Output("produtos.pdf", "I");
