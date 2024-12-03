<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuários</title>
</head>
<body>

    <header class="header">
        <nav>sair</nav>
        <nav>user</nav>
    </header>

    <table border="">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>CARGO</th>
            </tr>
        </thead>
        

        </tbody>

            <tbody>
                <?php
                include "php/conexao.php";
                $sql = "SELECT * FROM tb_user";
                $query = $conexao->query($sql);
                
                    if ($query->num_rows > 0){
                        while ($row = $query->fetch_assoc()){

                            echo "<tr>";
                            echo "<td>" . $row['id_usuario'] . "</td>";
                            echo "<td>" . $row['nome'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['cargo'] . "</td>";
                            echo "<td><a href='php/editar.php?id=" . $row['id_usuario'] . "'>Editar</a></td>";
                            echo "<td><a href='php/excluir.php?id=" . $row['id_usuario'] . "' onclick=\"return confirm('Você tem certeza que deseja excluir este usuário?')\">Excluir</a></td>";
                            echo "</tr>";
                        }
                } else {
                    echo "<tr><td colspan='6'>Usuário não encontrado.</td></tr>";
                }
                ?>
            </tbody>
    </table>



</body>
</html>