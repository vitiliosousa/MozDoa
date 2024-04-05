<?php
include 'database.inc.php';
if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $date = $_POST["date"];
    $grupoSangue = $_POST["grupoSangue"];
    $genero = $_POST["genero"];
    $seguroMedico = $_POST["seguroMedico"];
    $alergia = $_POST["alergia"];
    $celular1 = $_POST["celular1"];
    $celular2 = $_POST["celular2"];
    $morada = $_POST["morada"];
    $aprovation = $_POST["aprovation"];
    $status = $_POST["status"];
    $orgaoDoado = $_POST["orgaoDoado"];
    $saudeStat = $_POST["saudeStat"];
    $razaoDoacao = $_POST["razaoDoacao"];
    $historico = $_POST["historico"];

    
    $sql = "INSERT INTO paciente (paciente_nome, paciente_data_nasc, paciente_grupo_sanguineo, paciente_genero, paciente_seguro_medico, paciente_alergia, 
            paciente_numero_telefone, paciente_numero_telefone_contacto, paciente_morada, paciente_aprovacao_pessoa_contacto, paciente_urgencia, paciente_orgao_requisitado, estado_saude, paciente_razao_requisicao, paciente_historico_medico)
            VALUES ('$name', '$date', '$grupoSangue', '$genero', '$seguroMedico', '$alergia', 
            '$celular1', '$celular2', '$morada', '$aprovation', '$status', '$orgaoDoado', '$saudeStat', '$razaoDoacao', '$historico')";

    
    if ($conn->query($sql) === TRUE) {
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro ao inserir registro: " . $conn->error;
    }
}
    

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adicionando_paciente.css">
    <title>Adicionar Paciente</title>
</head>
<body>
    <h1>Paciente</h1>
    <div class="inputs">
        <table>
        <form action="" method="post">
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="name"></td>
                <td>Data de Nascimento:</td>
                <td><input type="date" name="date"></td>
                <td>Grupo Sanguineo:</td>
                <td>
                    <select id="" name="grupoSangue">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>+
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Genero:</td>
                <td>
                    <select id="" name="genero">
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select>
                </td>
                <td>Seguro Medico:</td>
                <td>
                    <select id="" name="seguroMedico">
                        <option value="Sim">Sim</option>
                        <option value="Nao">Não</option>
                    </select>
                </td>
                <td>Alergias:</td>
                <td>
                    <input type="text" name="alergia">
                </td>
            </tr>
            <tr>
                <td>Numero de Telefone:</td>
                <td>
                    <input type="tel" name="celular1">
                </td>
                <td>Telefone de Contacto:</td>
                <td>
                    <input type="tel" name="celular2">
                </td>
                <td>Morada:</td>
                <td>
                    <input type="text" name="morada">
                </td>
            </tr>
            <tr>
                <td >Aprovação do Contacto:</td>
                <td>
                    <select id="" name="aprovation">
                        <option value="aprovado">Aprovado</option>
                        <option value="nao_aprovado">Não Aprovado</option>
                    </select>
                </td>
                <td>Urgencia:</td>
                <td>
                    <select id="" name="status">
                        <option value="urgente">Urgente</option>
                        <option value="nao_urgente">Nao Urgente</option>
                    </select>
                </td>
                <td>Orgão Doado:</td>
                <td><select name="orgaoDoado" id="" size="">
                    <?php
                        $query = mysqli_query($conn,"SELECT * FROM orgao_disponivel");
                        while($row = mysqli_fetch_array($query)){
                            echo " <option value='".$row['orgao_disponivel_id']."'>$row[orgao_disponivel_nome]</option>";
                        }
                    ?>
                </select></td>
            </tr>
            <tr>
                <td>Estado de Saude:</td>
                <td colspan="2">
                    <textarea id="" cols="30" rows="5" name="saudeStat"></textarea>
                </td>
                <td>Razão da Doação:</td>
                <td colspan="2">
                    <textarea id="" cols="30" rows="5" name="razaoDoacao"></textarea>
                </td>
            </tr>
            <td>Historico medico:</td>
                <td colspan="2">
                    <textarea id="" cols="30" rows="5" name="historico"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" ><input type="submit" name="submit" value="Submeter"></td>
            </tr>
            <tr>
        </form>
        </table>
    </div>
</body>
</html>