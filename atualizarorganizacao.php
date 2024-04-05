<?php
    include 'database.inc.php';

    if(isset($_POST['update'])){
        $orgID = $_POST['orgID'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $localizacao = $_POST['localizacao'];
        $aprovation = $_POST['aprovation'];

        $sql = mysqli_query($conn, "UPDATE `organizacao` SET `organizacao_nome`='$nome',`organizacao_localizacao`='$localizacao',`numero_telefone`='$telefone',`aprovacao_governamental`='$aprovation' WHERE organizacao_id = '$orgID'");
        
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
                        <td><input type=\"text\" name=\"nome\" value=\"$row[organizacao_nome]\" /></td>
                        <td><input type=\"text\" name=\"localizacao\" value=\"$row[organizacao_localizacao]\" /></td>
                        <td><input type=\"number\" name=\"telefone\" value=\"$row[numero_telefone]\" /></td>
                        <td><input type=\"text\" name=\"aprovation\" value=\"$row[aprovacao_governamental]\" /></td>
                        <input type=\"hidden\" name=\"orgID\" value=\"$row[organizacao_id]\" />
                        <td><input type=\"submit\" name=\"update\" value=\"update\" /></td>
                    </tr>
                </form>
                ";
            }
        
        ?>
        
        
     
    </table>
</body>
</html>