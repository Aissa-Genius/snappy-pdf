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
            background-color: #fff;
            height: 100%;
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
            border-left: 3px solid #0dcaf047 ;
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
            top: 0;

        }
        .footer {
            bottom: 0;
            background: #00adee;
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
        h6{
            font-size: 13px;
        }

    </style>
</head>
<body>

<div id="header" class="header"   >
    <div class="clearfix">
        <div class="box" style="text-align: left;" >
            <img   class="logo" src="img/petitgenius.png" alt=" ">
        </div>
        <h5  class="box" style="float: right;text-align: end ; width: 70% ;  margin-top: 8px;text-align: right ">RECOMMANDATION D'INGÉNIERIE</h5>
    </div>
    <hr/>
</div>
<div  id="footer"  class="footer">
      Page <span class="pagenum"></span>
</div>

<div style="padding-top: 46px;height: 980px" >
    <div >
        <div class="clearfix   "  style="  padding: 0 ;">
            <div  class="box secetion_information" style="float: left;text-align: end ; width: 50%;  ; margin: 0" >
                <strong >{{$data['demande']['name']}}</strong>
                {{$data['demande']['street_number']}}  {{$data['demande']['route']}}
                {{$data['demande']['locality']}} <br> {{$data['demande']['administrativeAreaLevel1']}}  <br> {{$data['demande']['postal_code']}}
            </div>
            <div  class="box secetion_information" style="float: left;text-align: end ; width: 50%;  " >
                <strong > DESTINATAIRE / MAÎTRE DE L'OUVRAGE:</strong>
                {{$data['demande']['client_name']}}
                {{$data['demande']['phone']}}
                {{$data['demande']['email']}}

            </div>
        </div>
        <hr/>
        <div >
            <div  >
                <h6>Intrants considérés lors de la présente soumission : </h6>
                <div class="text_area">{{$data['intrants_considere_lors_presente']}}</div></div>
            <div>
                <h6>Travaux à réaliser et livrables : </h6>
                <div class="text_area">{{$data['travaux_realiser_et_livrables']}}</div>
            </div>
            <div>
                <h6>Note et exlusions: </h6>
                <div class="text_area">{{$data['notes_et_exclusions']}}</div>
            </div>
        </div>
    </div>
    <h6>Croquis du concept : </h6>
    <div  style="border: 1px solid #ced4da;position: relative; max-height: {{$img_height}} px; padding: 5px;overflow: hidden;text-align: center;"   >
        <img  style="max-height:100% ; width:100% ; "  src="{{$data['attachments'][0]['url']}}" alt=" ">
        <img  class="logo_vistech" src="img/logofr.svg" >
    </div>

</div>
<div class="page"></div>
<div style="padding-top: 56px;">
    <h6>Ventilation des équipements,des travaux à considérer :  </h6>
    <table class="table">
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
        @foreach($data['catalogues'] as $catalogue)
        <tr>
            <td style="text-align: left !important;"  >{{$catalogue['type']}}</td>
            <td style="text-align: left !important;"  >{{$catalogue['model']}}</td>
            <td>{{$catalogue['quantity']}}</td>
            <td>{{$catalogue['unite']}}</td>
            <td>    @if ($catalogue['type'] == 'pieu' ) <span style="text-transform: lowercase"  >  {{$catalogue['couple']}}   lb-ft</span> @endif</td>
        </tr>
                @endforeach
        </tbody>
    </table>
    <div class="clearfix" >
        <div  style="width:22%;height: 250px; float: left" >
            <p  style="margin-top:50px" >  Préparé par : </p>
            <p style="margin-top: 100px" >Approuvé par : </p>
        </div>
        <div style="width:44%;height: 250px;float: left">
           <img  style="height: 25mm ;width: 70mm " src="{{$data['demande']['occupied_by']['signatureurl']}}">
            <p style="border-top: 1px solid black"  > {{ $data['demande']['occupied_by']['first_name']}} {{ $data['demande']['occupied_by']['last_name']}} , {{ $data['demande']['occupied_by']['titre']}}  </p>
            <img  style="height: 25mm ;width: 70mm;margin-top: 5px "  src="img/sing.png">
            <p style="border-top: 1px solid black" > {{$data['aprroved']['approved_by']['first_name']}} {{$data['aprroved']['approved_by']['last_name']}} {{$data['aprroved']['approved_by']['titre']}}</p>
        </div>
        <div style="width:33%;height:250px;float: right;" >
            <img style="height:35.03mm ; width: 59.55mm ; margin-top:70px "  src="{{$data['aprroved']['approved_by']['sceururl']}}">
            <p style="text-align: center" >{{Carbon\Carbon::parse($data['aprroved']['approved_at'])->format('Y-m-d')}}</p>
        </div>
    </div>
</div>




<div class="page"></div>


<div style="margin-top: 70px" class="note">
    @if (true)
        <h2>page  {{$img_height}}</h2>

    @endif

</div>


</body>
</html>
