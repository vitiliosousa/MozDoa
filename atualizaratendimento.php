<?php
    include 'database.inc.php';

    if(isset($_POST['update'])){
        $doutor = $_POST['doutor'];
        $organizacao = $_POST['organizacao'];
        $paciente = $_POST['paciente'];
        $doador = $_POST['doador'];
        $data = $_POST['data'];
        $descricao = $_POST['descricao'];
        $aprovacao = $_POST['aprovacao'];
        $atendimento_id = $_POST['atendimento_id'];        

        $sql = mysqli_query($conn, "UPDATE `atendimento` SET `doutor`='$doutor',`organizacao`='$organizacao',`paciente`='$paciente',`doador`='$doador',`data`='$data',`descricao`='$descricao',`aprovacao`='$aprovacao' WHERE atendimento_id = '$atendimento_id'");
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styledoacoes.css">
    <title>Atualizar Paciente</title>
</head>
<body>
    <h1>Atualizar Atendimento</h1>
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
            $sql = mysqli_query($conn,"SELECT * FROM atendimento WHERE status = '1'");

            while($row = mysqli_fetch_array($sql)){
                echo "
                <form action=\"\" method=\"post\">
                    <tr>
                        <td><input type=\"text\" name=\"doutor\" value=\"$row[doutor]\" /></td>
                        <td><input type=\"text\" name=\"organizacao\" value=\"$row[organizacao]\" /></td>
                        <td><input type=\"text\" name=\"paciente\" value=\"$row[paciente]\" /></td>
                        <td><input type=\"text\" name=\"doador\" value=\"$row[doador]\" /></td>
                        <td><input type=\"text\" name=\"data\" value=\"$row[data]\" /></td>
                        <td><input type=\"text\" name=\"descricao\" value=\"descricao\" /></td>
                        <td><input type=\"text\" name=\"aprovacao\" value=\"$row[aprovacao]\" /></td>
                        <td><input type=\"text\" name=\"atendimento_id\" value=\"$row[atendimento_id]\" /></td>
                        <td><input type=\"submit\" name=\"update\" value=\"update\" /></td>
                    </tr>
                </form>
                ";
            }
        
        ?>
        
        
     
    </table>
</body>
</html>