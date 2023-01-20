<?php

// Incluir arquivo de configuração
require_once('funcao.php');
require_once('../vendor/autoload.php');

enviar_cookie();

header('Content-type: application/json; charset=utf-8');
date_default_timezone_set('America/Sao_Paulo');

//Altera a hora para formato americano
$data = date('Y-m-d', strtotime(str_replace('/', '-', $_REQUEST['data'])));

// Define o período
$periodo = $_REQUEST['periodo'];
if ($periodo == 'manha') {
    $periodo = $data . ' 08:00';
}
if ($periodo == 'tarde') {
    $periodo = $data . ' 13:00';
}

/*
Cria o timestamp
*/
$unixTime = time();
$time = new \DateTime();
$time->setTimestamp($unixTime);
$timestamps = $time->format('Y-m-d H:i:s');

/*
formata telefone
*/
$telefone =  removeFormatacao($_REQUEST['telefone']);

$ddd = substr($telefone, 0, 2);
$tel = substr($telefone, 2);

/*
formatacao cep
*/
$cep =  removeFormatacao($_REQUEST['cep']);

$formulario = [
    "Store" => [
        "Name" =>  $_REQUEST['nome_estabelecimento'],
        "Address" => $_REQUEST['endereco'],
        "ZipCode" => $cep,
        "District" => $_REQUEST['bairro'],
        "City" => $_REQUEST['cidade'],
        "State" => $_REQUEST['estado'],
        "Complement" => $_REQUEST['complemento'] ?? "",
        "AddressNumber" => $_REQUEST['numero']
    ],
    "Responsible" => [
        "Name" =>  $_REQUEST['nome'],
        "PhoneNumber" => $tel,
        "PhoneNumber2" => '',
        "ddd" => $ddd,
        "ddd2" => '',
        "Email" => $_REQUEST['email']
    ],
    "Schedule" => [
        "ScheduleDate" => $periodo,
        "ServiceType" => 1
    ],
    "created_at" => $timestamps,
    "notification_sent_mail" => "false",
    "has_plate" => "true"
];

$dados = json_encode($formulario);
$insert_dados = json_decode($dados, true);

try {

    $data = $insert_dados;

    if (!$data) {
        echo 'error: Ocorreu um erro interno, contate a TI';
        http_response_code(400);
        exit();
    }

    $empresa = 'LCAM';
    $nome    = 'LCAM';
    $usuario = 'bancobv';
    $payload = $dados;
    $evento  = 'Inseriu o formulario no sistema ';

    //Cria o timestamp
    $unixTime = time();
    $time = new \DateTime();
    $time->setTimestamp($unixTime);
    $timestamps = $time->format('Y-m-d H:i:s');

    $message = [
        [
            "user"      => $usuario,
            "name"      => $nome,
            "ip"        => $ipClient,
            "value"     => $evento,
            "type"      => 'type',
            "local"     => 'local',
            "funcao"    => 'funcao'
        ]
    ];

    $post = array(
        'component' => 'LCAM_Informatica', 'level' => 5,
        'customer' => $usuario,'message' => json_encode($message)
    );

    http_response_code(200);
    echo json_encode($formulario);
    
} catch (\Exception $e) {
    echo 'error: ' . $e->getMessage();
}

function removeFormatacao($value)
{
    return preg_replace('/[^0-9]/', '', $value);
}