<?php 

$host = 'localhost';
$DBname = 'triagemDB';
$username = 'root';
$password = 'aluno';

$conexao = new mysqli($host, $username, $password,$DBname);
//para criar uma conexao com o banco usamos o mysqli 

if($conexao-> connect_error){
    http_response_code(500);
    echo json_encode(["erro" => "Falha na conexão com o Servidor"],JSON_UNESCAPED_UNICODE); //retorna a mensagem utf
    exit();
} 


?>