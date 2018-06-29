<?php

$GetParam = filter_input_array(INPUT_POST,FILTER_DEFAULT);



$nome = $_POST`['nome'];
$tel = $_POST`['tel'];
$email = $_POST`['email'];
$msg = $_POST`['msg'];
$ mensagem = $_POST`['mensagem'];

$cliente = "From: " .$nome;

$corpo = 'Orçamento - iCod | Developers

          Nome: ' .$nome.'
          tel: ' .$tel.'
          E-mael: ' .$email.'
          Negócio: ' .$msg. '
          Mensagem: ' .mensagem.'';

if(mail("adryanno@gmail.com", "Atendimento",$corpo)){
    echo "<script>alert('Mensagem enviada com sucesso!');</script>";
    header("Location: orçamento.html");
    
    
}else{
    echo"<script>alert('Erro ao enviar, tente novamente');</script>";
}
?>