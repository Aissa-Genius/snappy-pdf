@extends('pdf.layouyt')
@section('content')
<div class="note" >
<h1> page 1</h1>
<p>test 1</p>
</div>

<div class="page"></div>
<div  class="note">
    <h1> page 2</h1>
    <p>test 2</p>
    <img src="{{asset("/img/petitgenius.png")}}">

</div>

@endsection
