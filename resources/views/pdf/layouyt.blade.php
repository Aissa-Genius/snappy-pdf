<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .note{
            background-color: orange;
            border: 2px dashed orangered;
            padding: 20px ;
        }
        .page{
            page-break-after: always;
        }
        .logo{
            width:120px;
            height: 40px;
        }
    </style>
</head>
<body>
@yield('content')
</body>
</html>
