<?php
    include 'database.inc.php';

    if(isset($_POST['delete'])){
        $docID = $_POST['docID'];

        $sql = mysqli_query($conn, "UPDATE `doutor` SET `status`='0' WHERE doutor_id = '$docID'");
        
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
                        <td>$row[nome]</td>
                        <td>$row[telefone]</td>
                        <td>$roww[organizacao_nome]</td>
                        <input type=\"hidden\" name=\"docID\" value=\"$row[doutor_id]\" />
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