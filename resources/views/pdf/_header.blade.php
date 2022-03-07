<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <title>Document</title>


    <style>
        body{
            font-family: Roboto,Helvetica Neue,sans-serif !important;
            font-size: 11px!important;
            font-weight:400;
        }
        p{
            margin-top: 0;
            margin-bottom: 0;
        }
        .logo{
            width:120px;
            max-height: 40px;
        }
        .box {
            float: left;
            width: 30%;
        }

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
        hr{
            color: inherit;
            background-color: currentColor;
            border: 0;
            opacity: .25;
        }
        .secetion_information{
            background: white;
            border-radius: 8px ;
            box-shadow: rgba(100, 100, 111, 0.1) 0px 7px 29px 0px;
            white-space: pre-line;
        }
        .secetion_information strong{
            text-decoration: underline
        }
        .text_area{
            border-radius:8px;
            background: white ;
            border: 1px solid #ced4da;
            border-left: 2px solid #0dcaf047 ;
            white-space:pre-line ;
            overflow-wrap: anywhere;
            padding: 5px;

        }
        .page{
            page-break-after: always;
        }
        p{
            font-size: 14px;
        }
        h4{
            padding: 0;
            margin: 10px;
        }
        .header,
        .footer {
            width: 100%;
            text-align: center;
            position: fixed;
        }
        .header {
            top: 0px;
        }
        .footer {
            bottom: 0px;
        }
        .pagenum:before {
            content: counter(page);
        }
        .logo_vistech{
            position: absolute;
            height: 48px;
            right: 14px;
            top: 15px;
        }
        .table{
            width: 100%;
            justify-content: center;
            text-transform: capitalize;
        }
        th{
            font-size: 11px;
            background: #00adee;
            color: black;
            text-align: center;
            border: none;
            border-bottom: 1px solid #ddd;
            font-weight: 500;

        }
        tr{
            height: 30px;
            font-size: 11px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

    </style>
</head>
<body>

<div class="header"  >
    <div class="clearfix">
        <div class="box" >
            <img   class="logo" src="img/petitgenius.png" alt=" ">
        </div>
        <h5  class="box" style="float: right;text-align: end ; width: 70% ;  margin-top: 8px; ">RECOMMANDATION D'INGÉNIERIE</h5>
    </div>
    <hr/>
</div>
<div class="footer">
    Page <span class="pagenum"></span>
</div>



<div class="clearfix   "  style="  padding: 0 ;margin-top: 60px">
    <div  class="box secetion_information" style="float: left;text-align: end ; width: 50%;  ; margin: 0" >
       <strong > Réparation de muret Riviere Richelieu</strong>
        15 Rue Jacques-Cartier N , QC , <br>Saint-Jean-sur-Richelieu Québec Canada <br>J3B 8R8
    </div>
    <div  class="box secetion_information" style="float: left;text-align: end ; width: 50%;  " >
         <strong > DESTINATAIRE / MAÎTRE DE L'OUVRAGE:</strong>
            Interprojet <br>(418) 542-8280<br>d.pedneault@interpojet.ca
    </div>
</div>
<hr/>
<div class="note" >
    <div  >
        <h6>Intrants considérés lors de la présente soumission : </h6>
        <div class="text_area"> - Courriel de Vistech le 2022-03-02
                - Étude géotechnique de CIMA+ émise en décembre 2021</div></div>
    <div>
        <h6>Travaux à réaliser et livrables : </h6>
        <div class="text_area">   - Fourniture et installation de 2 pieux galvanisés pour des poubelles.
                - Le type d'embout/plaque galvanisé est sujet à changement.</div>
    </div>
    <div>
        <h6>Note et exlusions: </h6>
        <div class="text_area">- Selon l'étude géotechnique, le roc est est situé à environ 0,4 mètre. Donc, les pieux seront ancrées au roc.
                - L'excavation du terrain est à prévoir pour atteindre le roc./div>

    </div>
</div>
<h6>Croquis du concept : </h6>
<div  style="border: 1px solid #ced4da;position: relative; height: 280px; padding: 5px"  >
    <img  style="height:available ; width: 100% "  src="img/pdfImg.png" alt=" ">
    <img  class="logo_vistech" src="img/logofr.svg" >
</div>

<div class="page"></div>
<div style="margin-top: 70px" class="note">
    <h6>Ventilation des équipements,des travaux à considérer :  </h6>
    <table class="table  mb-5">
        <thead>
        <tr >
            <th scope="col" style="text-align: left !important;" >Type</th>
            <th scope="col" style="text-align: left !important; "  >Modéle</th>
            <th scope="col">Quantité </th>
            <th scope="col">Unité </th>
            <th scope="col">Couple Requis</th>
        </tr>
        </thead>
        <tbody>
{{--        @foreach($employee ?? '' as $data)--}}
            <tr>
                <td style="text-align: left !important;"  >Pieu</td>
                <td style="text-align: left !important;"  >Pieu Vistech [Fût: Φ3 1/2" | Longueur: 10'-0" | Hélice: 10"] </td>
                <td>15</td>
                <td> U</td>
                <td> 0 lb-ft</td>
            </tr>
<tr>
    <td scope="row" style="text-align: left !important;"> Ouvriers</td>
    <td style="text-align: left !important;" > <span>Découpage Des Pieux En Chantier </span> </td>
    <td>1</td>
    <td> U</td>
    <td></td>
</tr>
{{--        @endforeach--}}
        </tbody>
    </table>

</div>
<div class="page"></div>
<div style="margin-top: 70px" class="note">
    <h2>page 3</h2>

    <div class="container" >
        <div class="row">
            <div class="col-6 bg-dark " style="height: 60px" ></div>
            <div class="col-6 bg-danger" style="height: 60px" ></div>
        </div>
    </div>

</div>
</body>
</body>
</html>
