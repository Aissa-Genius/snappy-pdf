<div class="row mt-3">


    <div class="col-7">

        <div class="row">
            <div class="col-4 d-flex align-items-center justify-content-center">
                Préparé par :
            </div>

            <div class="col-8">
                <img src="{{ $signatures['signature_prepared'] }}" class="img-fluid" style="width: 70mm; height: 25mm" alt="...">
                <div class="border-top border-dark">
                    {{ $signatures['name_prepared'] }}
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-4  d-flex align-items-center justify-content-center">
                Approuvé par :
            </div>

            <div class="col-8">
                <img src="{{ $signatures['signature_approved'] }}" class="img-fluid" style="width: 70mm; height: 25mm" alt="...">
                <div class="border-top border-dark" >
                    {{ $signatures['name_approved'] }}
                </div>
            </div>
        </div>

    </div>

    <div class="col-5 d-flex align-items-center justify-content-center">
        <figure class="figure align-items-center justify-content-center">
            <img src="{{ $signatures['seal_image'] }}" class="figure-img img-fluid rounded" alt="..."
                 style="width: 60mm; height: 35mm">
            <figcaption class="text-center">{{ $signatures['seal_date'] }}</figcaption>
        </figure>
    </div>


</div>
