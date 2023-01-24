<?php

header('Content-type: application/json; charset=utf-8');
date_default_timezone_set('America/Sao_Paulo');

$name   = $_REQUEST['nome'];
$email  = $_REQUEST['email'];
$empresa = $_REQUEST['empresa'];

//formata telefone
$telefone =  removeFormatacao($_REQUEST['telefone']);

$ddd = substr($telefone, 0, 2);
$tel = substr($telefone, 2);

$fullmessage = "Nome: ".$name."\n"."Empresa:".$empresa."\n"."E-mail:".$email."\n"."Telefone:".$telefone;

// Set your email address where you want to receive emails.
$to = $email;
$subject = 'TESTE DE ENVIO DE E-MAIL';
$headers = array(
    'From' => 'luizmoraes93@yahoo.com.br',
    'Reply-To' => 'operacional@lcaminformatica.com.br',
    'X-Mailer' => 'PHP/' . phpversion()
);

$send_email = imap_mail($to,$subject,$fullmessage);
// $send_email = mail($to,$subject,$fullmessage,$headers);
// $send_email = mail('luizmoraes93@yahoo.com.br','subject','fullmessage','headers');
// var_dump($send_email);
// exit();

// $send_email = true;

if($send_email)
{
    $response = ['status' => 'success'];
}else
{
    $response = ['status' => 'error'];
}

echo json_encode($response); 

function removeFormatacao($value)
{
    return preg_replace('/[^0-9]/', '', $value);
}
?>