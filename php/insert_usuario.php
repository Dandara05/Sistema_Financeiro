<?php 

include 'conexao.php'; 

//receber os dados do formulario
$nome = $_POST['nome'];
$email = $_POST['email'];
$cargo = $_POST['cargo'];
$senha =$_POST['senha'];


$sql = "INSERT INTO tb_user VALUES (null,'$nome','$email','$cargo','$senha')";

$conexao->query($sql);

if ($conexao->query($sql)) {
    echo "<script>alert('Inserido com Sucesso!'); history.black(); </script>";
}else {
    echo "Falha na conexão com banco de dados";
}

?>