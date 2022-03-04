<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        /*header*/
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

        .page{
            page-break-after: always;
        }
        .logo{
            width:120px;
            height: 40px;
        }
        .text_area{
            border-radius:8px;
            background: white ;
            border: 1px solid #ced4da;
            border-left: 4px solid #0dcaf047 ;
            white-space:pre-line ;
            overflow-wrap: anywhere;

        }
    </style>
</head>
<body>

<div class="clearfix">
    <div class="box " >
        <img  class="logo"  src="{{asset("/img/petitgenius.png")}}" alt=" ">
    </div>

    <div class="box" style="text-align: end;width: 40%;display: inline ;float: right " >
        <h3>RECOMMANDATION D'INGÉNIERIE</h3>
    </div>
</div>
<div  >
        <h6>Intrants considérés lors de la présente soumission : </h6>
        <div class="text_area">
            <p style="margin: 0">
                - Courriel de Vistech le 2022-03-02
                - Étude géotechnique de CIMA+ émise en décembre 2021
            </p>
        </div>


        <h6>Travaux à réaliser et livrables : </h6>
        <div class="text_area">
            <p style="margin: 0" >
                - Fourniture et installation de 2 pieux galvanisés pour des poubelles.
                - Le type d'embout/plaque galvanisé est sujet à changement.
            </p>
        </div>



        <h4>Note et exlusions: </h4>
        <div class="text_area">

            <p style="margin: 0" >   - Selon l'étude géotechnique, le roc est est situé à environ 0,4 mètre. Donc, les pieux seront ancrées au roc.
                - L'excavation du terrain est à prévoir pour atteindre le roc.
            </p>
        </div>


</div>

<div class="page"></div>
<div  class="note">
    <h1> page 2</h1>
    <p>test 2</p>
    <img src="{{asset("/img/petitgenius.png")}}">

</div>
</body>
</html>
