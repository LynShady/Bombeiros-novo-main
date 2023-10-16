<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Login</title>
</head>
<body>
    <h1>Faça login</h1>
    <a href="loginscreen.html" id="back">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14 5L9 10L14 15L13 17L6 10L13 3L14 5Z" fill="black"/>
        </svg>
    </a>
    <form class="input-wrapper" action="processamento_login.php" method="post">
        <div>
          <label for="cpf">Insira seu cpf</label>
          <input id="cpf" name="cpf" required placeholder="123.456.789-10">
        </div>
        <div>
          <label for="password-input">Insira sua senha</label>
          <input id="password-input" type="password" name="senha" required placeholder="Senha">
        </div>
        <button id="login-button" name="submit-button" type="submit">Login</button>
        <small id="form-text"></small>
    </form>
    
</body>
</html>

