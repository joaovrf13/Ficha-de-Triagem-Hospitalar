<?php 

require('conexao.php');//instancia da classe de conxeao 

$Nome = $_POST["nome"];
$Idade = $_POST["idade"]; 
$Sexo = $_POST["sexo"];
$Data_Nascimento = $_POST["data_nascimento"]; 
$Cpf = $_POST["cpf"]; 
$Telefone = $_POST["telefone"];
$Endereco = $_POST["endereco"];
$Sintomas = $_POST["sintomas"];
$InicioSintomas = $_POST["iniciosintomas"];
$DoencasExistentes = $_POST["doencasexistentes"];
$Medicamentos = $_POST["medicamentos"];
$Alergia = $_POST["alergia"];
$PressaoArterial = $_POST["pressaoarterial"];
$Temperatura = $_POST["temperatura"];
$BPM = $_POST["bpm"];
$SaturacaoO2 = $_POST["saturacaoO2"];
$Observacoes = $_POST["observacoes"];

$sql = "INSERT INTO pacientes(nome, idade, cpf, sexo, data_nascimento, telefone, endereco, sintomas, iniciosintomas, doencasexistentes, medicamentos, alergia, pressaoarterial, temperatura, bpm, saturacaoO2, observacoes) 
VALUES('$Nome', '$Idade', '$Cpf', '$Sexo', '$Data_Nascimento', '$Telefone', '$Endereco', '$Sintomas', '$InicioSintomas', '$DoencasExistentes', '$Medicamentos', '$Alergia', '$PressaoArterial', '$Temperatura', '$BPM', '$SaturacaoO2', '$Observacoes')";


//$InserirPaciente = $conexao->prepare("INSERT INTO triagemDB(id, nome, idade, cpf, sexo, data_nascimento, telefone, endereco, sintomas, iniciosintomas, doencasexistentes, medicamentos, alergia, pressaoarterial, temperatura, bpm, saturacaoO2, observacoes) VALUES (:nome, :idade, :cpf, :sexo, :data_nascimento, :telefone, :endereco, :sintomas, :iniciosintomas, :doencasexistentes, :medicamentos, :alergia, :pressaoarterial, :temperatura, :bpm, :saturacaoO2, :observacoes)");

/*if ($InserirPaciente->execute()){
    echo"Paciente inserido com sucesso!";
}else{
    echo "Erro ao inserir paciente: " . $InserirPaciente->error;
}

$InserirPaciente->close();
$conexao->close();*/
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paciente Cadastrado</title>
</head>
<body>
    <div class = "container">
        <?php 
            if(($conexao) -> query($sql) === TRUE){
                echo "<h2>Paciente Cadastrado com Sucesso!</
                h2>";
                echo"<divclass='paciente'></div>";
                echo "<b>Nome: </b> $Nome <br>";
                echo "<b>Idade: <b> $Idade <br>";
                echo "<b>Sexo: <b> $Sexo<br>";
                echo "<b>Data de Nascimento(YYYY/mm/dd): <b> $Data_Nascimento<br>";
                echo "<b>CPF: <b> $Cpf<br>";
                echo "<b>Telefone: <b> $Telefone <br>";
                echo "<b>Endereço: <b> $Endereco <br>";
                echo "<b>Sintomas: <b> $Sintomas <br>";
                echo "<b>Inicio dos Sintomas: <b> $InicioSintomas<br>";
                echo "<b>Doenças Existentes: <b> $DoencasExistentes<br>";
                echo "<b>Medicamentos: <b> $Medicamentos<br>";
                echo "<b>Alergia: <b> $Alergia<br>";
                echo "<b>Pressão Arterial: <b> $PressaoArterial<br>";
                echo "<b>Temperatura: <b> $Temperatura<br>";
                echo "<b>BPM: <b> $BPM<br>";
                echo "<b>Saturação: <b> $SaturacaoO2<br>";
                echo "<b>Observações: <b> $Observacoes<br>";
            }
            else{
                    echo "<p>Erro ao cadastrar Paciente: " . $conexao->error . "</p>" ;
            }
            $conexao -> close();
        ?>

    </div>
</body>
</html>