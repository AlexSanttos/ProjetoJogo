<?php
// Configurações de conexão com o banco de dados
$host = '3306';
$db = 'resgateperigoso_bd';
$usuario = 'root';
$senha = 'Skyline2';

// Conectando ao banco de dados
$conexao = new PDO("mysql:host=$3306;dbname=$regasteperigoso_bd", $root, $skyline2);
?>

<?php
// Recuperando os dados do formulário
$nomeCompleto = $_POST['NomeCompleto'];
$email = $_POST['E-mail'];
$confirmacaoEmail = $_POST['E-mail2'];
$dataNascimento = $_POST['Dtnasc'];
$usuario = $_POST['Usuario'];
$senha = $_POST['Senha'];

// Restante do código...
?>
<?php
// Declaração SQL preparada
$sql = "INSERT INTO cadastro (NomeCompleto, E-mail, E-mail2, Dtnasc, Senha)
        VALUES (:NomeCompleto, :E-mail, :E-mail2, :Dtnasc, :Usuario, :Senha)";

// Preparando a declaração
$statement = $conexao->prepare($sql);

// Executando a declaração com os valores dos campos do formulário
$statement->execute(array(
    ':NomeCompleto' => $NomeCompleto,
    ':E-mail' => $E-mail,
    ':E-mail2' => $E-mail2,
    ':Dtnasc' => $dataNascimento,
    ':Usuario' => $Usuario,
    ':Senha' => $Senha
));
?>
<?php
// Verificando se a inserção foi bem-sucedida
if ($statement) {
    // Inserção bem-sucedida, redirecionar para uma página de confirmação
    header("Location: confirmacao.html");
    exit();
} else {
    // Ocorreu um erro na inserção
    echo "Ocorreu um erro ao enviar o formulário.";
}
?>

