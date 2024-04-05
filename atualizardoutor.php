<?php
    include 'database.inc.php';

    if(isset($_POST['update'])){
        $docID = $_POST['docID'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $org = $_POST['organizacao'];
        $sql = mysqli_query($conn, "UPDATE `doutor` SET `nome`='$nome',`telefone`='$telefone' WHERE doutor_id = '$docID'");
        
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
            <th>Telefone</th>
            <th>ID da Organização</th>
            <th>Acção</th>
        </tr>
        <?php
            $sql = mysqli_query($conn,"SELECT * FROM doutor WHERE status = '1'");

            while($row = mysqli_fetch_array($sql)){
                $idORG = $row['id_organizacao'];
                $sq = mysqli_query($conn,"SELECT * FROM organizacao WHERE organizacao_id = '$idORG'");
                while($roww = mysqli_fetch_array($sq)){
                    echo "
                <form action=\"\" method=\"post\">
                    <tr>
                        <td><input type=\"text\" name=\"nome\" value=\"$row[nome]\" /></td>
                        <td><input type=\"number\" name=\"telefone\" value=\"$row[telefone]\" /></td>
                        <td><input type=\"hidden\" name=\"organizacao\" value=\"$roww[organizacao_id]\" />$roww[organizacao_nome]</td>
                        <input type=\"hidden\" name=\"docID\" value=\"$row[doutor_id]\" />
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