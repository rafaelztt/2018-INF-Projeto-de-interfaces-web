<?php
// DAdos da conexão
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// conecta no banco
$conn = new mysqli($servername, $username, $password, $dbname);

// verifica conexão
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

// Prepara o SQL
// Aqui em vez de colocar os valores, você vai concatenar
// com as variáveis que recebem os dados do $_POST['campo']
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

// Executa o sql
if ($conn->query($sql) === TRUE) {
   echo "Registro realizado com sucesso!";
   // Mostra o ID do elemento que acabou de ser inserido
   echo "ID do novo registro: " . $mysqli->insert_id;

// Se deu algum erro...
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}

// Fecha a conexão
$conn->close();
?>
