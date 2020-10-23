<div class="col-6 col-sm-4 col-md-4 col-xl-3 focom-list focom-reset-padding p-1 p-sm-2 p-md-2">
    <a href="{{ route('articles.show', ['category' => $article->type->slug, 'slug' => $article->slug]) }}" class="text-dark">
        <div class="border shadow-sm bg-white rounded focom-list h-100">
            <img src="/storage/images/thumbnails/{{$article->feature_image}}">
            <h4 class="m-1 h5 font-weight-normal">{{$article->title}}</h4>
            <p class="lead focom-list-price m-1 font-weight-normal">${{$article->price}}</p>
            <div class="pt-3 m-1">
                <i class="fas fa-map-marker-alt fa-lg" aria-hidden="true"></i>
                <p class="pl-1 lead d-inline-block font-weight-normal">{{ $article->place }}</p>
            </div>
        </div>
    </a>
</div>