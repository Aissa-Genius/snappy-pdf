<div class="row my-2">

    <span class="fw-bold mb-2">Travaux à réaliser et livrables :</span>

    <div>
        <div class="pt-3 text_area">
            <ul>
                @foreach($travaux as $key => $value)
                    <li>
                        {{ $value }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

</div>
