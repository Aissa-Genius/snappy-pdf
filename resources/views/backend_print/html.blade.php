<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRINT PDF</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<style>

</style>

<body class="p-4">

<div class="row">
    @include('backend_print.html.header')
</div>

<div class="row">
    @include('backend_print.html.body_1')
</div>

<div class="row">
    @include('backend_print.html.body_2')
</div>

<div class="row">
    @include('backend_print.html.body_3')
</div>

<div class="row">
    @include('backend_print.html.body_4')
</div>

<div class="row">
    @include('backend_print.html.footer')
</div>

</body>
</html>
