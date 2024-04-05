<?php

include 'database.inc.php';

if(isset($_POST['submit'])){
    $doutor = $_POST['doutor'];
    $organizacao = $_POST['organizacao'];
    $paciente = $_POST['paciente'];
    $doador = $_POST['doador'];
    $data = $_POST['data'];
    $aprovacao = $_POST['aprovacao'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO `atendimento`(`doutor`, `organizacao`, `paciente`, 
    `doador`, `data`, `aprovacao`, `descricao`) 
     VALUES ('$doutor','$organizacao','$paciente','$doador','$data','$aprovacao','$descricao')";

     $insert = mysqli_query($conn,$sql);


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adicionando_paciente.css">
    <title>Atendimento</title>
</head>
<body>
    <h1>Atendimento</h1>
    <div class="inputs">
        <table>
        <form action="" method="post">
            <tr>
               
                <td>ID do Doutor:</td>
                <td><select name="doutor" id="">
                    <?php
                        $query = mysqli_query($conn, "SELECT * FROM doutor");
                        while($row = mysqli_fetch_array($query)){
                            echo " <option value='".$row['doutor_id']."'>$row[nome]</option>";
                        }
                    ?>
                    
                </select></td>
                <td>Nome da Organização:</td>
                <td><select name="organizacao" id="">
                <?php
                        $query = mysqli_query($conn, "SELECT * FROM organizacao");
                        while($row = mysqli_fetch_array($query)){
                            echo " <option value='".$row['organizacao_id']."'>$row[organizacao_nome]</option>";
                        }
                    ?>
                </select></td>
            </tr>
            <tr>
                <td>ID do Paciente:</td>
                <td><select name="paciente" id="">
                <?php
                        $query = mysqli_query($conn, "SELECT * FROM paciente");
                        while($row = mysqli_fetch_array($query)){
                            echo " <option value='".$row['paciente_id']."'>$row[paciente_nome]</option>";
                        }
                    ?>
                </select></td>
                <td>ID do doador:</td>
                <td><select name="doador" id="">
                <?php
                        $query = mysqli_query($conn, "SELECT * FROM doador");
                        while($row = mysqli_fetch_array($query)){
                            echo " <option value='".$row['atendimento_id']."'>$row[atendimento_nome]</option>";
                        }
                    ?>
                </select></td>
                <td>Data:</td>
                <td><input type="date" name="data" id=""></td>
            </tr>
            <tr>
                <td>Aprovacao</td>
                <td>
                    <select id="" name="aprovacao">
                        <option value="aprovado">Aprovado</option>
                        <option value="reprovado">Reprovado</option>
                    </select>
                </td>
                <td>Descrição:</td>
                <td>
                    <textarea id="" name="descricao" cols="30" rows="4"></textarea>
                </td>
                
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
        </form>
    </div>
</body>
</html>