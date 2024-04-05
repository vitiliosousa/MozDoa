<?php
    include 'database.inc.php';

    if(isset($_POST['update'])){
        $orgaoID = $_POST['orgaoID'];
        $nome = $_POST['nome'];
        $tamanho = $_POST['tamanho'];
        $doador = $_POST['doador'];
        $sql = mysqli_query($conn, "UPDATE `orgao_disponivel` SET `orgao_disponivel_nome`='$nome',`tamanho`='$tamanho' WHERE orgao_disponivel_id = '$orgaoID'");
        
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
                        <td><input type=\"text\" name=\"nome\" value=\"$row[orgao_disponivel_nome]\" /></td>
                        <td><input type=\"number\" name=\"tamanho\" value=\"$row[tamanho]\" /></td>
                        <td><input type=\"hidden\" name=\"doador\" value=\"$roww[doador_id]\" />$roww[doador_nome]</td>
                        <input type=\"hidden\" name=\"orgaoID\" value=\"$row[orgao_disponivel_id]\" />
                        <td><input type=\"submit\" name=\"update\" value=\"update\" /></td>
                    </tr>
                </form>
                ";
                }
                
            }
        
        ?>
       
    </table>
</body>
</html>