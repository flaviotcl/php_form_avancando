<?php 


$to = 'flaviotcl@gmail.com';
$subject ='Email de teste com PHP';
$message = "
<p><strong>Nome</strong>:{$nome} </p>
<p><strong>Url</strong>:{$url} </p>
<p><strong>Email</strong>:{$email} </p>
<p><strong>Mensagem</strong>:{$descricao} </p>
";

$additional_headers = 'From:'.$email.'\r\n';
$additional_headers .= 'Reply-to:'.$email.'\r\n';
$additional_headers .= 'X-Mailer:'.phpversion();

if ( mail($to, $subject, $message, $additional_headers, $additional_parameters))
{
    die('Ok, Email enviado');
}else
{
    die('Falha ao enviar');
}