<?php 
$server = "127.0.0.1";
$bd = 'bd_aplicacao';
$usuario = 'root';
$password = '';


// Cria uma conexão com o banco de dados
$conexao = mysqli_connect($server, $bd, $usuario, $password);

// Verifica se a conexão foi estabelecida com sucesso
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
echo "Conexão bem sucedida!";


// try{
//     $conexao = mysqli_connect($server, $bd, $usuario, $password, );
// }catch(Exception  $e){
//     echo "Erro na conexão: $e";
//     exit();
// } 


?>