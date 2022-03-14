<div class="row my-2">

    <span class="fw-bold mb-2">Note et exlusions:</span>

    <div>
        <div class="pt-3 text_area">
            <ul>
                @foreach($notes as $key => $value)
                    <li>
                        {{ $value }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

</div>
