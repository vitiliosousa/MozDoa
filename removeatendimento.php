<?php
    include 'database.inc.php';

    if(isset($_POST['delete'])){
        $atendimento_id = $_POST['atendimento_id'];

        $sql = mysqli_query($conn, "UPDATE `atendimento` SET `status`='0' WHERE atendimento_id = '$atendimento_id'");
        
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
    <h1>Remover atendimento</h1>
    <button>Urgente</button>
    <button>Nao Urgente</button>
    <button>Todos</button>
    <table>
        <tr>
            <th>doutor</th>
            <th>organizacao</th>
            <th>paciente</th>
            <th>doador</th>
            <th>data</th>
            <th>descricao</th>
            <th>aprovacao</th>
        </tr>
        <?php
            $sql = "SELECT * FROM atendimento where status='1'";
            $result = $conn->query($sql);

            if ($result) {
                while ($row = $result->fetch_assoc()) {
                        echo "
                            <form action=\"\" method=\"post\">
                                <tr>
                                    <td>$row[doutor]</td>
                                    <td>$row[organizacao]</td>
                                    <td>$row[paciente]</td>
                                    <td>$row[doador]</td>
                                    <td>$row[data]</td>
                                    <td>$row[descricao]</td>
                                    <td>$row[aprovacao]</td>
                                    <input type=\"hidden\" name=\"atendimento_id\" value=\"$row[atendimento_id]\" />
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
