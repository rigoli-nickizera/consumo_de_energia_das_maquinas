<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Relatório EnerControl</title>
</head>
<body>

<h1>Relatório de Consumo de Energia</h1>

<p>Data:
<?php
echo date("d/m/Y", strtotime($data));
?>
</p>

<p>Setor: <?php echo $setor; ?></p>

<h2>Máquinas</h2>

<?php

foreach ($relatorio as $item) {

    echo "<hr>";

    echo "<p>Máquina: " . $item["maquina"] . "</p>";

    echo "<p>Potência: " . $item["potencia"] . " kW</p>";

    echo "<p>Ação: " . $item["acao"] . "</p>";

    echo "<p>Horas de funcionamento: " . $item["horas"] . "</p>";

    echo "<p>Consumo: " .
    number_format($item["consumo"], 2, ",", ".") . " kWh</p>";

    echo "<p>Custo: R$ " .
    number_format($item["custo"], 2, ",", ".") . "</p>";

}

?>

<hr>

<h2>Resumo do consumo</h2>

<p>Consumo total:
<?php
echo number_format($consumoTotal, 2, ",", ".");
?> kWh</p>

<p>Custo total:
R$ <?php
echo number_format($custoTotal, 2, ",", ".");
?></p>

<p>Projeção mensal:
R$ <?php
echo number_format($projecaoMensal, 2, ",", ".");
?></p>

<?php

if ($consumoTotal > 200) {
    echo "<p>Atenção: o consumo total ultrapassou 200 kWh!</p>";
} else {
    echo "<p>O consumo total está dentro do limite de 200 kWh.</p>";
}

?>

<br>

<a href="view.php">Voltar ao lançamento</a>

</body>
</html>