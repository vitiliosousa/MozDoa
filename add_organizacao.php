<?php
    include 'database.inc.php';

    if(isset($_POST['submit'])){

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $localizacao = $_POST['localizacao'];
    $aprovacao = $_POST['aprovacao'];
    $sql = "INSERT INTO `organizacao`(`organizacao_nome`, `organizacao_localizacao`,
     `numero_telefone`, `aprovacao_governamental`) VALUES ('$nome','$localizacao','$telefone',
     '$aprovacao')";
     $insert = mysqli_query($conn,$sql);
    }

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adicionando_paciente.css">
    <title>Organização</title>
</head>
<body>
    <h1>Organização</h1>
    <div class="inputs">
        <table>
            <form action="" method="post">
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome"></td>
                <td>Telefone 1:</td>
                <td><input type="tel" name="telefone"></td>
                <td>Localizacao:</td>
                <td><input type="tel" name="localizacao"></td>
               
            </tr>
            <tr>
                
                <td>Aprovacao Governamental:</td>
                <td>
                    <select id="" name="aprovacao">
                        <option value="aprovado">Aprovado</option>
                        <option value="nao_aprovado">Não Aprovado</option>
                    </select>
                </td>
            </tr>
            
                <td colspan="2"><input type="submit" name="submit" id="" value="Submeter"></td>
            </tr>
</form>
        </table>
    </div>
</body>
</html>