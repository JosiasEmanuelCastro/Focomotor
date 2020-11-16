<div class="col-lg-3 col-md-6 col-sm2 text-center pt-3">
    <div class="bg-primary text-white px-4 py-2 rounded-top">
        <h4>{{$plan->name}}</h4>
    </div>
    <div class="border rounded-bottom shadow">
        <p class="pt-2"><span class="font-weight-bold">$</span><span class="h1 font-weight-bold">{{$plan->price}}</span><br>por mes</p>
        <div>
            <i class="fas fa-check d-inline-block text-success"></i>
            <p class="d-inline-block small py-4">Publicar hasta {{$plan->articles_limit}} clasificados</p>
        </div>
        <p class="btn btn-outline-primary rounded-pill px-4 mb-4 focom-price-btn">
            <a href="{{ route('subscribe', ['plan' => $plan->id]) }}"> Conseguir </a>
        </p>

                
    </div>
</div>