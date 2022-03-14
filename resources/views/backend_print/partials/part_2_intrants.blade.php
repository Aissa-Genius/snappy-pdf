<div class="row my-2">

    <span class="fw-bold mb-2">Intrants considérés lors de la présente soumission :</span>

    <div>
        <div class="pt-3 text_area">
            <ul>
                @foreach($intrants as $key => $value)
                    <li>
                        {{ $value }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

</div>
