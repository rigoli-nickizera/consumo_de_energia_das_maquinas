<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> EnerControl</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <nav>
        <ul>
            <li><a href="#"> ⚡EnerControl</a></li>
            <li class="dropdown">
                <a href="#">Painel</a>
                <div class="dropdown-content">
                    <a href="#">Lançamento diário</a>
                    <a href="#">Relatórios</a>
                    <a href="#">Configurações</a>
                    <a href="#">Histórico Mensal</a>
                </div>
            </li>
          
            <li class="dropdown">
                <a href="#">Contato</a>
                <div class="dropdown-content">
                    <a href="#">Pedro</a>
                    <a href="#">Nicoli</a>
                    <a href="#">Thiago</a>
                    <a href="#">Ana Barbara</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="#">Curso</a>
                <div class="dropdown-content">
                    <a href="#">Desenvolvimento de Sistemas</a>
                    <a href="#">Logística</a>
                    <a href="#">Qualidade</a>
                    <a href="#">Plástico</a>
                </div>
            </li>
            <li class="direita"><a href="#">Inscreva-se</a></li>
            <li class="direita"><a class="active" href="#">Minha conta</a></li>
        </ul>
    </nav>
</header>

<div class="principal">
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
                    <td><input name="maquina[]" value="HAITIAN MA II 1600"></td>
                    <td><input type="number" name="potencia[]" value="25"></td>
                    <td>
                        <select name="acao[]">
                            <option>Injeção</option>
                            <option>Torneamento</option>
                        </select>
                    </td>
                    <td><input type="number" name="horas[]" value="8"></td>
                </tr>
                <tr>
                    <td><input name="maquina[]" value="ROMI Centur 30D"></td>
                    <td><input type="number" name="potencia[]" value="7.5"></td>
                    <td>
                        <select name="acao[]">
                            <option>Torneamento</option>
                            <option>Injeção</option>
                        </select>
                    </td>
                    <td><input type="number" name="horas[]" value="8"></td>
                </tr>
            </table>
            <br>
            <button type="submit">Enviar lançamento</button>
        </form>
    </div>
</div>

</body>
</html>