<div class="row my-2">

    <span class="fw-bold mb-2">Intrants considérés lors de la présente soumission :</span>

    <div class="p-l-3 my-2">
        <div class="border-start rounded-start border-5" style="background-color: #F7F7F7;">

            <ol class="list-group list-group-numbered">
                @foreach($intrants as $key => $value)
                    <li class="list-group-item border-0">
                        {{ $value }}
                    </li>
                @endforeach
            </ol>
        </div>
    </div>

</div>
