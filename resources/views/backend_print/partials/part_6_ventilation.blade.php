<div class="row my-4">

    <span class="fw-bold mb-2">Ventilation des équipements, des travaux à considérer :</span>

    <div class="p-l-3 my-2">
        <div class="border-start rounded-start border-5 p-4" style="border-color: #F7F7F7;">

            <table class="table table-striped">
                <thead>
                <tr class="rounded-top" {{--style="background-color: #eeeeee;"--}}>
                    <th scope="col">Type</th>
                    <th scope="col">Modéle</th>
                    <th scope="col" class="text-center">Quantité</th>
                    <th scope="col" class="text-center">Unité</th>
                    <th scope="col" class="text-end">Couple Requis</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ventilation as $key => $value)
                    <tr>
                        <td>{{ $value['type'] }}</td>
                        <td>{{ $value['model'] }}</td>
                        <td class="text-center">{{ $value['quantity'] }}</td>
                        <td class="text-center">{{ $value['unite'] }}</td>
                        <td class="text-end">{{ $value['couple'] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>

</div>
