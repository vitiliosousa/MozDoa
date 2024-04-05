<?php
    include 'database.inc.php';

    if(isset($_POST['update'])){
        $doador_id = $_POST['doador_id'];
        $pessoa_contacto = $_POST['pessoa_contacto'];
        $doador_nome = $_POST['doador_nome'];
        $doador_data_nasc = $_POST['doador_data_nasc'];
        $doador_alergia = $_POST['doador_alergia'];
        $doador_grupo_sanguineo = $_POST['doador_grupo_sanguineo'];
        $doador_seguro_medico = $_POST['doador_seguro_medico'];
        $doador_historico_medico = $_POST['doador_historico_medico'];
        $doador_cidade = $_POST['doador_cidade'];
        $doador_numero_telefone = $_POST['doador_numero_telefone'];
        $doador_razao_doacao = $_POST['doador_razao_doacao'];
        $estado = $_POST['estado'];

        $sql = mysqli_query($conn, "UPDATE `doador` SET `pessoa_contacto`='$pessoa_contacto',`doador_nome`='$doador_nome',`doador_data_nasc`='$doador_data_nasc',`doador_alergia`='$doador_alergia',`doador_grupo_sanguineo`='$doador_grupo_sanguineo',`doador_seguro_medico`='$doador_seguro_medico',`doador_historico_medico`='$doador_historico_medico',`doador_cidade`='$doador_cidade',`doador_numero_telefone`='$doador_numero_telefone',`doador_razao_doacao`='$doador_razao_doacao',`estado`='$estado' WHERE doador_id = '$doador_id'");
        
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
            <th>pessoa_contacto</th>
            <th>doador_nome</th>
            <th>doador_data_nasc</th>
            <th>doador_alergia</th>
            <th>doador_grupo_sanguineo</th>
            <th>doador_seguro_medico</th>
            <th>doador_historico_medico</th>
            <th>doador_cidade</th>
            <th>doador_numero_telefone</th>
            <th>doador_razao_doacao</th>
            <th>estado</th>
        </tr>
        <?php
            $sql = mysqli_query($conn,"SELECT * FROM doador WHERE status = '1'");

            while($row = mysqli_fetch_array($sql)){
                echo "
                <form action=\"\" method=\"post\">
                    <tr>
                        <td><input type=\"text\" name=\"pessoa_contacto\" value=\"$row[pessoa_contacto]\" /></td>
                        <td><input type=\"text\" name=\"doador_nome\" value=\"$row[doador_nome]\" /></td>
                        <td><input type=\"number\" name=\"doador_data_nasc\" value=\"$row[doador_data_nasc]\" /></td>
                        <td><input type=\"text\" name=\"doador_alergia\" value=\"$row[doador_alergia]\" /></td>
                        <td><input type=\"text\" name=\"doador_grupo_sanguineo\" value=\"$row[doador_grupo_sanguineo]\" /></td>
                        <td><input type=\"text\" name=\"doador_seguro_medico\" value=\"doador_seguro_medico\" /></td>
                        <td><input type=\"text\" name=\"doador_historico_medico\" value=\"$row[doador_historico_medico]\" /></td>
                        <td><input type=\"text\" name=\"doador_cidade\" value=\"$row[doador_cidade]\" /></td>
                        <td><input type=\"text\" name=\"doador_numero_telefone\" value=\"$row[doador_numero_telefone]\" /></td>
                        <td><input type=\"text\" name=\"doador_razao_doacao\" value=\"$row[doador_razao_doacao]\" /></td>
                        <td><input type=\"text\" name=\"estado\" value=\"$row[estado]\" /></td>
                        <input type=\"hidden\" name=\"doador_id\" value=\"$row[doador_id]\" />
                        <td><input type=\"submit\" name=\"update\" value=\"update\" /></td>
                    </tr>
                </form>
                ";
            }
        
        ?>
        
        
     
    </table>
</body>
</html>