<?php

$data = $_POST["data"];
$setor = $_POST["setor"];

$maquinas = $_POST["maquina"];
$potencias = $_POST["potencia"];
$acoes = $_POST["acao"];
$horas = $_POST["horas"];

$tarifa = 0.85;

$consumoTotal = 0;
$custoTotal = 0;

$relatorio = array();

foreach ($maquinas as $i => $maquina) {

    $potencia = $potencias[$i];
    $tempo = $horas[$i];

    $consumo = $potencia * $tempo;

    $custo = $consumo * $tarifa;

    $consumoTotal = $consumoTotal + $consumo;

    $custoTotal = $custoTotal + $custo;

    $relatorio[] = array(
        "maquina" => $maquina,
        "potencia" => $potencia,
        "acao" => $acoes[$i],
        "horas" => $tempo,
        "consumo" => $consumo,
        "custo" => $custo
    );
}

$projecaoMensal = $custoTotal * 30;

include "view_relatorio.php";

?>