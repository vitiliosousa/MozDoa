<?php
    include 'database.inc.php';

    if(isset($_POST['delete'])){
        $orgID = $_POST['orgID'];

        $sql = mysqli_query($conn, "UPDATE `organizacao` SET `status`='0' WHERE organizacao_id = '$orgID'");
        
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
    <h1>Organização</h1>
    <table>
        <tr>
            <th>Nome</th>
            <th>Localizacao</th>
            <th>Telefone</th>
            <th>Aprovação Governamental</th>
            <th>Acaco</th>
        </tr>
        <?php
            $sql = mysqli_query($conn,"SELECT * FROM organizacao WHERE status = '1'");

            while($row = mysqli_fetch_array($sql)){
                echo "
                <form action=\"\" method=\"post\">
                    <tr>
                        <td>$row[organizacao_nome]</td>
                        <td>$row[organizacao_localizacao]</td>
                        <td>$row[numero_telefone]</td>
                        <td>$row[aprovacao_governamental]</td>
                        <input type=\"hidden\" name=\"orgID\" value=\"$row[organizacao_id]\" />
                        <td><input type=\"submit\" name=\"delete\" value=\"delete\" /></td>
                    </tr>
                </form>
                ";
            }
        
        ?>
        
        
     
    </table>
</body>
</html>