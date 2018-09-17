<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login no sistema</title>
  </head>
  <body>
    <h3>Autenticação</h3>

    <!-- O action indica para onde os dados vão. Geralmente é uma URL -->
    <form action="controle/login.php" method="POST">

      <label for="">Usuário</label><br>
      <input type="text" name="usuario" value=""><br>

      <label for="">Senha</label><br>
      <input type="password" name="senha" value=""><br>

      <br>
      <input type="submit" value="Login">

    </form>

  </body>
</html>
