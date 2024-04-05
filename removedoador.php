<?php
    include 'database.inc.php';

    if(isset($_POST['delete'])){
        $orgID = $_POST['orgID'];

        $sql = mysqli_query($conn, "UPDATE `doador` SET `status`='0' WHERE doador_id = '$orgID'");
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styledoacoes.css">
    <title>Organização</title>
</head>
<body>
    <h1>Remover doador</h1>
    <button>Urgente</button>
    <button>Nao Urgente</button>
    <button>Todos</button>
    <table>
        <tr>
            <th>Nome</th>
            <th>data_nasc</th>
            <th>alergia</th>
            <th>grupo_sanguineo</th>
            <th>seguro_medico</th>
            <th>historico_medico</th>
            <th>pais</th>
            <th>cidade</th>
            <th>numero_telefone</th>
            <th>telefone_contacto</th>
            <th>razao_doacao</th>
            <th>estado</th>
            <th>Ações</th>
        </tr>
        <?php
            $sql = "SELECT * FROM doador where status='1'";
            $result = $conn->query($sql);

            if ($result) {
                while ($row = $result->fetch_assoc()) {
                        echo "
                            <form action=\"\" method=\"post\">
                                <tr>
                                    <td>$row[doador_nome]</td>
                                    <td>$row[doador_data_nasc]</td>
                                    <td>$row[doador_alergia]</td>
                                    <td>$row[doador_grupo_sanguineo]</td>
                                    <td>$row[doador_seguro_medico]</td>
                                    <td>$row[doador_historico_medico]</td>
                                    <td>$row[doador_pais]</td>
                                    <td>$row[doador_cidade]</td>
                                    <td>$row[doador_numero_telefone]</td>
                                    <td>$row[pessoa_contacto]</td>
                                    <td>$row[doador_razao_doacao]</td>
                                    <td>$row[estado]</td>
                                    <input type=\"hidden\" name=\"orgID\" value=\"$row[doador_id]\" />
                                    <td><input type=\"submit\" name=\"delete\" value=\"Delete\" /></td>
                                </tr>
                            </form>
                        ";
                }
                $result->free();
            } else {
                echo "Erro na consulta: " . $conn->error;
            }
        ?>
    </table>
</body>
</html>
