<?php
include 'database.inc.php';



if(isset($_POST['submit'])){
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $idOrga = $_POST['idOrganizacao'];

    $sql = "INSERT INTO `doutor`(`nome`, `telefone`, `id_organizacao`) 
    VALUES ('$nome','$telefone',$idOrga)";

     $insert = mysqli_query($conn,$sql);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adicionando_paciente.css">
    <title>Doutor</title>
</head>
<body>
    <h1>Doutor</h1>
    <div class="inputs">
        <table>
            <form action="" method="post">
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome"></td>
                <td>Telefone:</td>
                <td><input type="tel" name="telefone"></td>
                <td>ID da Organização:</td>
                <td><select name="idOrganizacao" id="">
                    <?php
                    

                        $sql = mysqli_query($conn,"SELECT * FROM organizacao ");
                        while($row = mysqli_fetch_array($sql)){
                            echo " <option value='".$row['organizacao_id']."'>$row[organizacao_nome]</option>";
                        }
                    ?>
                </select> 
            </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="Submit"></td>
            </tr>
            </form>
        </table>
    </div>
</body>
</html>