<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Orçamento</title>
</head>
<body>

<?php   
    
$nome = $_POST['nome'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$mensagem = $_POST['mensagem'];

$headers = "Content-Type: text/html; charset=UTF-8\n";

$cliente = "From: " .$nome;

$corpo = 'Orçamento - iCod | Developers

          Nome: ' .$nome.'
          tel: ' .$tel.'
          E-mael: ' .$email.'
          Negócio: ' .$msg. '
          Mensagem: ' .$mensagem.'';
    
if(mail("adryanno@gmail.com", "Orçamento",$corpo,$headers)){
    echo "<script>alert('Mensagem enviada com sucesso!');</script>";   
    header("Location: orçamento.html");
    
    
}else{
    echo"<script>alert('Erro ao enviar, tente novamente');</script>";
}
?>

</body>
</html>