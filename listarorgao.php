<?php
    include 'database.inc.php';

    if(isset($_POST['delete'])){
        $orgaoID = $_POST['orgaoID'];

        $sql = mysqli_query($conn, "UPDATE `orgao_disponivel` SET `status`='0' WHERE orgao_disponivel_id = '$orgaoID'");
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styledoacoes.css">
    <title>Orgão</title>
</head>
<body>
    <h1>Doutor</h1>
    <table>
        <tr>
            <th>Nome</th>
            <th>Tamanho</th>
            <th>ID do Doador</th>
            <th>Acção</th>
        </tr>
        <?php
            $sql = mysqli_query($conn,"SELECT * FROM orgao_disponivel WHERE status = '1'");

            while($row = mysqli_fetch_array($sql)){
                $idDad = $row['id_doador'];
                $sq = mysqli_query($conn,"SELECT * FROM doador WHERE doador_id = '$idDad'");
                while($roww = mysqli_fetch_array($sq)){
                    echo "
                <form action=\"\" method=\"post\">
                    <tr>
                        <td>$row[orgao_disponivel_nome]</td>
                        <td>$row[tamanho]</td>
                        <td>$roww[doador_nome]</td>
                        <input type=\"hidden\" name=\"orgaoID\" value=\"$row[orgao_disponivel_id]\" />
                        <td><input type=\"submit\" name=\"delete\" value=\"delete\" /></td>
                    </tr>
                </form>
                ";
                }
                
            }
        
        ?>
       
    </table>
</body>
</html>