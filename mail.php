<?php header("Content-type: text/html; charset=utf-8");

$GetParam = filter_input_array(INPUT_POST,FILTER_DEFAULT);



$nome = $_POST['nome'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$mensagem = $_POST['mensagem'];


$cliente = "From: " .$nome;

$corpo = 'Orçamento - iCod | Developers

          Nome: ' .$nome.'
          tel: ' .$tel.'
          E-mail: ' .$email.'
          Negócio: ' .$msg. '
          Mensagem: ' .$mensagem.'';

if(mail("leonardocarlos_@live.com", "Atendimento",$corpo)){
    echo "<script>alert('Mensagem enviada com sucesso!');</script>";
    header("Location: orçamento.html");
    
    
}else{
    echo"<script>alert('Erro ao enviar, tente novamente');</script>";
}
?>