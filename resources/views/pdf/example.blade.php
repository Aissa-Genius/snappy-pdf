@extends('pdf.layouyt')
@section('content')
<div class="note" >
    <div class="bg-danger" >
        <h6>Intrants considérés lors de la présente soumission : </h6>
        <div class="text_area">
          <p>
              - Courriel de Vistech le 2022-03-02
              - Étude géotechnique de CIMA+ émise en décembre 2021
          </p>
        </div>
    </div>
    <div>
        <h6>Travaux à réaliser et livrables : </h6>
        <div class="text_area">
           <p>
               - Fourniture et installation de 2 pieux galvanisés pour des poubelles.
               - Le type d'embout/plaque galvanisé est sujet à changement.
           </p>
        </div>

    </div>
    <div>
        <h6>Note et exlusions: </h6>
        <div class="text_area">
            <p>
                - Selon l'étude géotechnique, le roc est est situé à environ 0,4 mètre. Donc, les pieux seront ancrées au roc.
                - L'excavation du terrain est à prévoir pour atteindre le roc.
            </p>
        </div>

    </div>
</div>

<div class="page"></div>
<div  class="note">
    <h1> page 2</h1>
    <p>test 2</p>
    <img src="{{asset("/img/petitgenius.png")}}">

</div>

@endsection
