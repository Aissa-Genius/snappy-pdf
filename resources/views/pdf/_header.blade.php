<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color: lightblue;
        }
        .logo{
            width:120px;
            max-height: 40px;
        }
        .box {
            float: left;
            width: 30%;
            padding-left: 30px;
            padding-right: 30px;
        }

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
</head>
<body>

<div class="clearfix">
    <div class="logo" style="background-color:#bbb">
        <img    src="{{asset("/img/petitgenius.png")}}" alt=" ">
    </div>
    <div class="box" >
    </div>
    <div class="box" style="float: right;text-align: end" >
        <h3>RECOMMANDATION D'INGÉNIERIE</h3>
    </div>
</div>
</body>
</html>
