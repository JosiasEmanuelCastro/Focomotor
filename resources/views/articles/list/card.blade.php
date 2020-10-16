<div class="col-6 col-sm-4 col-md-4 col-xl-3 focom-list focom-reset-padding p-1 p-sm-2 p-md-2">
    <a href="{{ route('car.details') }}" class="text-dark">
        <div class="border rounded shadow bg-white rounded focom-list">
            <img src="/storage/images/thumbnails/{{$article->feature_image}}" width="100%">
            <div class="px-1 px-md-2">  
                <h4 class="m-1 h5 focom-list-titleFont">{{$article->title}}</h4>
                <p class="lead focom-list-price m-1 font-weight-normal">${{$article->price}}</p>
                <div class="pt-3 m-1">
                    <i class="fas fa-map-marker-alt fa-lg"></i>
                    <p class="pl-1 lead d-inline-block font-weight-normal">{{ $article->location ? $article->city : $article->user->city }}</p>
                </div>
            </div>
        </div>
    </a>
</div>