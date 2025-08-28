<?php 

$Nome = $_POST["nome"];
$Idade = $_POST["idade"]; 
$Sexo = $_POST["sexo"];
$Data_Nascimento = $_POST["data_nascimento"]; 
$Cpf = $_POST["cpf"]; 
$Telefone = $_POST["telefone"];
$Endereco = $_POST["endereco"];
$Sintomas = $_POST["sintomas"];
$InicioSintomas = $_POST["inciosintomas"];
$DoencasExistentes = $_POST["doencasexistentes"];
$Medicamentos = $_POST["medicamentos"];
$Alergia = $_POST["alergia"];
$PressaoArterial = $_POST["pressaoarterial"];
$Temperatura = $_POST["temperatura"];
$BPM = $_POST["bpm"];
$SaturacaoO2 = $_POST["saturacaoO2"];
$Observacoes = $_POST["observacoes"];


//conexao banco
$host = 'localhost';
$DBname = 'triagemDB';
$username = 'root';
$password = '';

$conexao = mysqli_connect($host, $username, $password,$DBname);

$InserirPaciente =$conexao->prepare("INSERT INTO triagemDB(nome, idade, cpf, sexo, data_nascimento, cpf, telefone, endereco, sintomas, iniciosintomas, doencasexistentes, medicamentos, alergia, pressaoarterial, temperatura, bpm, saturacaoO2, observacoes)");

if ($InserirPaciente->execute()){
    echo"Paciente inserido com sucesso!";
}
else{
    echo "Erro ao inserir paciente: " . $InserirPaciente->error;
}

$InserirPaciente->close();
$conexao->close();
?>