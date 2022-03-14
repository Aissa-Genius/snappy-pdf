<!doctype html>
<html lang="en">
<head>
    <title>Backend PDF</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRINT PDF</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<style>

</style>

<body class="p-4 bg-white" style="font-family: Roboto, Helvetica Neue, sans-serif !important;">

<div class="container fs-6">

    <div class="row">
        @include('backend_print.partials.part_0_header')
    </div>

    <hr/>

    <div class="row">
        @include('backend_print.partials.part_1_titles')
    </div>

    <hr />

    <div class="row">
        @include('backend_print.partials.part_2_intrants')
    </div>

    <hr/>

    <div class="row">
        @include('backend_print.partials.part_3_travaux')
    </div>

    <hr/>

    <div class="row">
        @include('backend_print.partials.part_4_notes')
    </div>

    <div class="row">
        @include('backend_print.partials.part_5_croquis')
    </div>

    <p style="page-break-before: always"></p>

    <div class="row">
        @include('backend_print.partials.part_0_header')
    </div>

    <hr/>

    <div class="row mt-5">
        @include('backend_print.partials.part_6_ventilation')
    </div>

    <hr/>

    <div class="row">
        @include('backend_print.partials.part_7_signatures')
    </div>

    <div class="row">
        @include('backend_print.partials.part_8_footer')
    </div>

</div>

</body>
</html>
