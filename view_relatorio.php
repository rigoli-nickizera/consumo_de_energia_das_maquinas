<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Relatório EnerControl</title>
</head>
<body style="background-image: url('foto.png/foto.png'); background-size: cover; background-position: center; background-attachment: fixed;">

    <div>
        <h1>Relatório de Consumo de Energia</h1>
            <p>Data: <?php echo date("d/m/Y", strtotime($data)); ?></p>
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

<?php
echo "<p>Consumo total: " . number_format($consumoTotal, 2, ",", ".") . " kWh</p>";
echo "<p>Custo total: R$ " . number_format($custoTotal, 2, ",", ".") . "</p>";
echo "<p>Projeção mensal: R$ " . number_format($projecaoMensal, 2, ",", ".") . "</p>";

if($consumoTotal > 200) {
    echo "<p>Atenção: o consumo total ultrapassou 200 kWh!</p>";
}else {
    echo "<p>O consumo total está dentro do limite de 200 kWh.</p>";
}
?>

<br>
<a href="view.php">Voltar ao lançamento</a>

</div>
</body>
</html>