<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Alunos</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
<table border=1>
        <thead>
            <tr>
                <td></td>
                <td></td>
                <td>id</td>
                <td>nome</td>
                <td>sexo</td>
                <td>cidade</td>
                <td>telefone</td>
                <td>email</td>
            </tr>
        </thead>
        <tbody>
            <?php
                include('config.php');

                // Consulta MySQL para recuperar os alunos
                $sql = "SELECT id_alu, nome_alu, cidade_alu, tel_alu, sexo_al, email_alu FROM aluno ORDER BY id_alu";
                $result = mysqli_query($conn, $sql);

                if (!$result) {
                    echo "Erro na consulta: " . mysqli_error($conn);
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id_alu'];
                        $nome = $row['nome_alu'];
                        $sexo = $row['sexo_al'];
                        $cidade = $row['cidade_alu'];
                        $telefone = $row['tel_alu'];
                        $email = $row['email_alu'];

                        echo '<tr>';
                        echo "<td><a href='alterar_aluno.php?id={$id}'>
                        <p >&#128221;</p>
                        </a></td>";
                        echo "<td><a href='excluir_aluno.php?id={$id}'>
                        <p> &#10060;</p>
                        </a></td>";
                        echo "<td>{$id}</td>";
                        echo "<td>{$nome}</td>";
                        echo "<td>{$sexo}</td>";
                        echo "<td>{$cidade}</td>";
                        echo "<td>{$telefone}</td>";
                        echo "<td>{$email}</td>";
                        echo "</tr>";
                    }

                    mysqli_free_result($result);
                }
                
                mysqli_close($conn);
            ?>
        </tbody>
    </table>

    <button onclick="window.location.href='cadastro_aluno.php'">&#10133; Inserir</button>

</body>
</html>
