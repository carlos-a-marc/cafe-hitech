<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nova Assinatura</title>
</head>
<body>

<h1>Novo Pedido de Assinatura</h1>

<h2>Dados do Assinante</h2>

<p>
    Dados de Contato:<br>
    Nome: <b>{{$assinante->name}}</b><br>
    Endereço de e-mail: <b>{{$assinante->mail}}</b><br>
    Telefone: <b>{{$assinante->phone}}</b><br><br>

    Endereço:<br>
    Rua {{$assinante->street}}, nº: {{$assinante->number}}<br>
    Bairro {{$assinante->nb}}, {{$assinante->city}}, {{$assinante->state}}<br><br>

    Assinatura:<br>
    Plano de assinatura escolhido: <b>{{$assinante->plan}}</b><br>

</p>

</body>
</html>
