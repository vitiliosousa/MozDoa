<?php
    include 'database.inc.php';

    if(isset($_POST['delete'])){
        $orgID = $_POST['orgID'];

        $sql = mysqli_query($conn, "UPDATE `paciente` SET `status`='0' WHERE paciente_id = '$orgID'");
        
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
    <h1>Remover Paciente</h1>
    <button>Urgente</button>
    <button>Nao Urgente</button>
    <button>Todos</button>
    <table>
        <tr>
            <th>Nome</th>
            <th>saude</th>
            <th>genero</th>
            <th>data_nasc</th>
            <th>alergia</th>
            <th>grupo_sanguineo</th>
            <th>seguro_medico</th>
            <th>historico_medico</th>
            <th>numero_telefone</th>
            <th>telefone_contacto</th>
            <th>morada</th>
            <th>aprovacao_pessoa_contacto</th>
            <th>razao_requisicao</th>
            <th>orgao_requisitado</th>
            <th>urgencia</th>
            <th>compatibilidade</th>
            <th>data_registo</th>
            <th>Ações</th>
        </tr>
        <?php
            $sql = "SELECT * FROM paciente where status='1'";
            $result = $conn->query($sql);

            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    $id = $row['paciente_orgao_requisitado'];
                    $orgao = "SELECT * FROM orgao_disponivel where orgao_disponivel_id='$id'";
                    $out = $conn->query($orgao);
                    while($roww = $out->fetch_assoc()){
                        echo "
                            <form action=\"\" method=\"post\">
                                <tr>
                                    <td>$row[paciente_nome]</td>
                                    <td>$row[estado_saude]</td>
                                    <td>$row[paciente_genero]</td>
                                    <td>$row[paciente_data_nasc]</td>
                                    <td>$row[paciente_alergia]</td>
                                    <td>$row[paciente_grupo_sanguineo]</td>
                                    <td>$row[paciente_seguro_medico]</td>
                                    <td>$row[paciente_historico_medico]</td>
                                    <td>$row[paciente_numero_telefone]</td>
                                    <td>$row[paciente_numero_telefone_contacto]</td>
                                    <td>$row[paciente_morada]</td>
                                    <td>$row[paciente_aprovacao_pessoa_contacto]</td>
                                    <td>$row[paciente_razao_requisicao]</td>
                                    <td>$roww[orgao_disponivel_nome]</td>
                                    <td>$row[paciente_urgencia]</td>
                                    <td>$row[paciente_compatibilidade]</td>
                                    <td>$row[data_requisicao]</td>
                                    <input type=\"hidden\" name=\"orgID\" value=\"$row[paciente_id]\" />
                                    <td><input type=\"submit\" name=\"delete\" value=\"Delete\" /></td>
                                </tr>
                            </form>
                        ";
                    }
                }
                $result->free();
            } else {
                echo "Erro na consulta: " . $conn->error;
            }
        ?>
    </table>
</body>
</html>
