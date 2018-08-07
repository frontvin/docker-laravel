<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Landing page</title>
    <link rel="shortcut icon" href="http://chocolat.nois3.net/app/themes/chocolat/img/favicon.jpg">
</head>
<body>
    <div>
        @foreach ($orders as $order)

        <p> Name : {{ $order->name }} </p> 
        <p> Email: {{ $order->email }} </p>

        @endforeach
    </div>
</div>

