<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Example</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" >
</head>
<style>

</style>
<body>

<div class="container pt-5" >
    <a type="button" class="btn btn-primary col-3" href="{{ url('/snappy') }}">Snappy</a>
    <a type="button" class="btn btn-primary col-3" href="{{ url('/html') }}">Backend Print (HTML)</a>
    <a type="button" class="btn btn-primary col-3" href="{{ url('/pdf') }}">Backend Print (PDF)</a>
</div>

</body>
</html>
