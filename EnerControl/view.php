<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>EnerControl</title>

    <style>
        body {
            font-family: Arial;
            background-color: white;
        }

        .menu {
            background-color: #003366;
            color: white;
            width: 150px;
            height: 500px;
            float: left;
            padding: 15px;
        }

        .conteudo {
            background-color: #eeeeee;
            margin-left: 190px;
            padding: 25px;
            height: 480px;
            border: 3px solid #168de0;
        }

        h2 {
            color: #003366;
        }

        input, select {
            padding: 8px;
            margin: 5px;
        }

        button {
            background-color: #ffc400;
            padding: 10px 30px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>

<div class="menu">
    <h2 style="color:white;">⚡ EnerControl</h2>

    <p>Painel</p>
    <p>Lançamento diário</p>
    <p>Relatórios</p>
    <p>Configurações</p>
    <p>Histórico Mensal</p>
</div>

<div class="conteudo">

    <h2>Lançamento Diário</h2>

    <form action="logica.php" method="POST">

        Data:
        <input type="date" name="data" required>

        <br><br>

        Setor:
        <select name="setor">
            <option>Usinagem e Metalurgia</option>
            <option>Montagem</option>
            <option>Produção</option>
        </select>

        <h3>Máquinas</h3>

        <table>
            <tr>
                <th>Máquina</th>
                <th>Potência</th>
                <th>Ação</th>
                <th>Horas</th>
            </tr>

            <tr>
                <td>
                    <input type="text" name="maquina[]" value="HAITIAN MA II 1600">
                </td>

                <td>
                    <input type="number" name="potencia[]" value="25" step="0.1">
                </td>

                <td>
                    <select name="acao[]">
                        <option>Injeção</option>
                        <option>Torneamento</option>
                    </select>
                </td>

                <td>
                    <input type="number" name="horas[]" value="8" min="0" max="24">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="text" name="maquina[]" value="ROMI Centur 30D">
                </td>

                <td>
                    <input type="number" name="potencia[]" value="7.5" step="0.1">
                </td>

                <td>
                    <select name="acao[]">
                        <option>Torneamento</option>
                        <option>Injeção</option>
                    </select>
                </td>

                <td>
                    <input type="number" name="horas[]" value="8" min="0" max="24">
                </td>
            </tr>
        </table>

        <br>

        <button type="submit">Enviar</button>

    </form>

</div>

</body>
</html>