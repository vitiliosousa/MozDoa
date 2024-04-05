<?php
    include 'database.inc.php';

    if(isset($_POST['update'])){
        $paciente_id = $_POST['paciente_id'];
        $id_orgao_disponivel = $_POST['id_orgao_disponivel'];
        $paciente_nome = $_POST['paciente_nome'];
        $estado_saude = $_POST['estado_saude'];
        $paciente_genero = $_POST['paciente_genero'];
        $paciente_data_nasc = $_POST['paciente_data_nasc'];
        $paciente_alergia = $_POST['paciente_alergia'];
        $paciente_grupo_sanguineo = $_POST['paciente_grupo_sanguineo'];
        $paciente_seguro_medico = $_POST['paciente_seguro_medico'];
        $paciente_historico_medico = $_POST['paciente_historico_medico'];
        $paciente_numero_telefone = $_POST['paciente_numero_telefone'];
        $paciente_numero_telefone_contacto = $_POST['paciente_numero_telefone_contacto'];
        $paciente_morada = $_POST['paciente_morada'];
        $paciente_aprovacao_pessoa_contacto = $_POST['paciente_aprovacao_pessoa_contacto'];
        $paciente_razao_requisicao = $_POST['paciente_razao_requisicao'];
        $paciente_orgao_requisitado = $_POST['paciente_orgao_requisitado'];
        $paciente_urgencia = $_POST['paciente_urgencia'];
        $paciente_compatibilidade = $_POST['paciente_compatibilidade'];
        $paciente_numero_telefone = $_POST['data_requisicao'];
        

        $sql = mysqli_query($conn, "UPDATE `paciente` SET `id_orgao_disponivel`='$id_orgao_disponivel',`paciente_nome`='$paciente_nome',`estado_saude`='$estado_saude',`paciente_genero`='$paciente_genero',`paciente_data_nasc`='$paciente_data_nasc',`paciente_alergia`='$paciente_alergia',`paciente_grupo_sanguineo`='$paciente_grupo_sanguineo',`paciente_seguro_medico`='$paciente_seguro_medico',`paciente_historico_medico`='$paciente_historico_medico',`paciente_numero_telefone`='$paciente_numero_telefone',`paciente_numero_telefone_contacto`='$paciente_numero_telefone_contacto',`paciente_morada`='$paciente_morada',`paciente_aprovacao_pessoa_contacto`='$paciente_aprovacao_pessoa_contacto',`paciente_razao_requisicao`='$paciente_razao_requisicao',`paciente_orgao_requisitado`='$paciente_orgao_requisitado',`paciente_urgencia`='$paciente_urgencia',`paciente_compatibilidade`='$paciente_compatibilidade',`data_requisicao`='$data_requisicao' WHERE paciente_id = '$paciente_id'");
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styledoacoes.css">
    <title>Atualizar Paciente</title>
</head>
<body>
    <h1>Atualizar Paciente</h1>
    <table>
        <tr>
            <th>id_orgao_disponivel</th>
            <th>paciente_nome</th>
            <th>estado_saude</th>
            <th>paciente_genero</th>
            <th>paciente_data_nasc</th>
            <th>paciente_alergia</th>
            <th>paciente_grupo_sanguineo</th>
            <th>paciente_seguro_medico</th>
            <th>paciente_historico_medico</th>
            <th>paciente_numero_telefone</th>
            <th>paciente_numero_telefone_contacto</th>
            <th>paciente_morada</th>
            <th>paciente_aprovacao_pessoa_contacto</th>
            <th>paciente_razao_requisicao</th>
            <th>paciente_orgao_requisitado</th>
            <th>paciente_urgencia</th>
            <th>paciente_compatibilidade</th>
            <th>data_requisicao</th>
        </tr>
        <?php
            $sql = mysqli_query($conn,"SELECT * FROM paciente WHERE status = '1'");

            while($row = mysqli_fetch_array($sql)){
                echo "
                <form action=\"\" method=\"post\">
                    <tr>
                        <td><input type=\"text\" name=\"id_orgao_disponivel\" value=\"$row[id_orgao_disponivel]\" /></td>
                        <td><input type=\"text\" name=\"paciente_nome\" value=\"$row[paciente_nome]\" /></td>
                        <td><input type=\"number\" name=\"estado_saude\" value=\"$row[estado_saude]\" /></td>
                        <td><input type=\"text\" name=\"estado_saude\" value=\"$row[estado_saude]\" /></td>
                        <td><input type=\"text\" name=\"paciente_data_nasc\" value=\"$row[paciente_data_nasc]\" /></td>
                        <td><input type=\"text\" name=\"paciente_alergia\" value=\"paciente_alergia\" /></td>
                        <td><input type=\"text\" name=\"paciente_grupo_sanguineo\" value=\"$row[paciente_grupo_sanguineo]\" /></td>
                        <td><input type=\"text\" name=\"paciente_seguro_medico\" value=\"$row[paciente_seguro_medico]\" /></td>
                        <td><input type=\"text\" name=\"paciente_seguro_medico\" value=\"$row[paciente_seguro_medico]\" /></td>
                        <td><input type=\"text\" name=\"paciente_numero_telefone\" value=\"$row[paciente_numero_telefone]\" /></td>
                        <td><input type=\"text\" name=\"paciente_numero_telefone_contacto\" value=\"$row[paciente_numero_telefone_contacto]\" /></td>
                        <td><input type=\"text\" name=\"paciente_morada\" value=\"paciente_morada\" /></td>
                        <td><input type=\"text\" name=\"paciente_aprovacao_pessoa_contacto	\" value=\"$row[paciente_aprovacao_pessoa_contacto]\" /></td>
                        <td><input type=\"text\" name=\"paciente_razao_requisicao\" value=\"$row[paciente_razao_requisicao]\" /></td>
                        <td><input type=\"text\" name=\"paciente_orgao_requisitado\" value=\"$row[paciente_orgao_requisitado]\" /></td>
                        <td><input type=\"text\" name=\"paciente_urgencia\" value=\"$row[paciente_urgencia]\" /></td>
                        <td><input type=\"text\" name=\"paciente_compatibilidade\" value=\"$row[paciente_compatibilidade]\" /></td>
                        <td><input type=\"text\" name=\"data_requisicao\" value=\"$row[data_requisicao]\" /></td>
                        <input type=\"hidden\" name=\"paciente_id\" value=\"$row[paciente_id]\" />
                        <td><input type=\"submit\" name=\"update\" value=\"update\" /></td>
                    </tr>
                </form>
                ";
            }
        
        ?>
        
        
     
    </table>
</body>
</html>