<?php
include 'database.inc.php';

if(isset($_POST['submit'])){
        $nome = $_POST['nome'];
        $date = $_POST['data'];
        $grupoSanguine = $_POST['grupoSangue'];
        $seguroMed = $_POST['seguroMedico'];
        $alergia = $_POST['alergia'];
        $celular1 = $_POST['celular1'];
        $celular2 = $_POST['celular2'];
        $morada = $_POST['morada'];
        $razaoDoacao = $_POST['razaoDoacao'];
        $histMedico = $_POST['histMedico'];
        $pais = $_POST['pais'];
        $estado = $_POST['estado'];

        $sql = "INSERT INTO `doador`(`pessoa_contacto`, `doador_nome`, `doador_data_nasc`, 
        `doador_alergia`, `doador_grupo_sanguineo`, `doador_seguro_medico`, `doador_historico_medico`,
         `doador_pais`, `doador_cidade`,  `doador_numero_telefone`, `doador_razao_doacao`,`estado`) 
         VALUES ('$celular2','$nome','$date','$alergia','$grupoSanguine','$seguroMed','$histMedico',
         '$pais','$morada','$celular1','$razaoDoacao','$estado')";

         $insert = mysqli_query($conn,$sql);


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adicionando_paciente.css">
    <title>Adicionar Doador</title>
</head>
<body>
    <h1>Doador</h1>
    <div class="inputs">
        <table>
            <form action="" method="post">
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome"></td>
                <td>Data de Nascimento:</td>
                <td><input type="date" name="data"></td>
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
                <td>Aprovacao:</td>
                <td>
                    <select id="" name="estado">
                        <option value="Aprovado">Aprovado</option>
                        <option value="Reprovado">Reprovado</option>
                    </select>
                </td>
                <td>Seguro Medico:</td>
                <td>
                    <select id="" name="seguroMedico">
                        <option value="Sim">Sim</option>
                        <option value="Nao">Não</option>
                    </select>
                </td>
                <td>Historico Medico:</td>
                <td>
                    <textarea name="histMedico" id="" cols="30" rows="10"></textarea>
                    <!--
                    <select id="" name="histMedico">
                        <option value="Sim">Sim</option>
                        <option value="Nao">Não</option>
                    </select>
                    -->
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
                <td>Pais:</td>
                <td>
                    <input type="text" name="pais">
                </td>
            </tr>
            <tr>
                
                
                
            </tr>
            <tr>
                
                <td>Razão da Doação:</td>
                <td colspan="2">
                    <textarea id="" cols="30" rows="5" name="razaoDoacao"></textarea>
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