<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylecadastro.css">
    <title> Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="form">
            <form action="#">
                <div class="titulo">
                    <h1>Criar uma Conta</h1>
                </div>
                <div class="inputs">
                    <div class="input-box">
                        <label for="firstname">Nome</label>
                        <input type="text" id="firstname" name="firstname" placeholder="Insira o seu nome" required>
                    </div>
                    <div class="input-box">
                        <label for="lastname">Sobrenome</label>
                        <input type="text" id="lastname" name="lastname" placeholder="Insira o seu Sobrenome">
                    </div>
                    <div class="input-box">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Insira o seu email" required>
                    </div>
                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input type="tel" id="number" name="number" placeholder="xx xxx xxxx" required>
                    </div>
                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="password" placeholder="Crie a sua senha" required>
                    </div>
                    <div class="input-box">
                        <label for="password">Confirme sua senha</label>
                        <input type="password" id="confirmpassword" name="password" placeholder="Confirme sua senha" required>
                    </div>
                </div>
                <div class="genero">
                    <div class="genero-titulo">
                        <h4>Genero</h4>
                    </div>
                    <div class="genero-group">
                        <div class="genero-input">
                            <input type="radio" id="male" name="genero">
                            <label for="male">Masculino</label>
                        </div>
                        <div class="genero-input">
                            <input type="radio" id="female" name="genero">
                            <label for="female">Femenino</label>
                        </div>
                        <div class="genero-input">
                            <input type="radio" id="others" name="genero">
                            <label for="others">Outros</label>
                        </div>
                    </div>
                </div>
                <div class="continuar">
                    <button><a href="index.php">CONFIRMAR</a></button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>