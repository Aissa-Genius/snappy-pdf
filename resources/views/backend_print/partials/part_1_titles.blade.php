<div class="row my-2">

    <div class="col-6">

        <div class="card">
            <div class="card-header">
                <span class="text-uppercase"><b>Périmètre sécurité APQ</b></span>
            </div>
            <div class="card-body">
                @foreach($titles['perimetre'] as $key => $value)
                    <h5 class="card-title">{{ $value }}</h5>
                @endforeach
                <p class="card-text"></p>
            </div>

        </div>

    </div>

    <div class="col-6">

        <div class="card">
            <div class="card-header">
                <span class="text-uppercase"><b>DESTINATAIRE / MAÎTRE DE L'OUVRAGE :</b></span>
            </div>
            <div class="card-body">
                @foreach($titles['destinataire'] as $key => $value)
                    <h5 class="card-title">{{ $value }}</h5>
                @endforeach
                <p class="card-text"></p>
            </div>

        </div>
    </div>
</div>
