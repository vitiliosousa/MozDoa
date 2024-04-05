<?php
include 'database.inc.php';
//$conn = new mysqli('localhost', 'root', '', 'tp2_sgbd');

if(isset($_POST['submit'])){
    
    $nome = $_POST['nomeOrgao'];
    $tamanho = $_POST['tamanho'];
    $idDoador = $_POST['idDoador'];

    $stmt = $conn->prepare("INSERT INTO orgao_disponivel (`orgao_disponivel_nome`, `tamanho`, `id_doador`) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $nome, $tamanho, $idDoador);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }


}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adicionando_paciente.css">
    <title>Orgão</title>
</head>
<body>
    <h1>Orgão</h1>
    <div class="inputs">
        <table>
            <form action="" method="post">

            
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nomeOrgao"></td>
                <td>Tamanho:</td>
                <td><input type="text" name="tamanho"></td>
                <td>ID do Doador:</td>
                
                <td><select name="idDoador" id="" size="">
                    <?php
                        $query = mysqli_query($conn,"SELECT * FROM doador");
                        while($row = mysqli_fetch_array($query)){
                            echo " <option value='".$row['doador_id']."'>$row[doador_nome]</option>";
                        }
                    ?>
                </select></td>
            </tr>
           
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="Submeter"></td>
            </tr>
        </form>
        </table>
    </div>
</body>
</html>