@php

    $location = json_decode($article->location);
    $place = (isset($location->address->city)) ? $location->address->city : $location->address->town;
    
@endphp

<article class="col-4 col-xl-3 p-2 align-self-stretch">
    <a href="{{ route('articles.show', ['category' => Str::slug($article->name), 'slug' => $article->slug]) }}" class="text-dark text-decoration-none" >
        <div class="border rounded shadow bg-white rounded focom-hover h-100" style="max-width: 250px;">
            <img src="/storage/images/thumbnails/{{$article->feature_image}}" width="100%" style="max-height: 200px; object-fit: cover;">
            <div class="px-1 px-md-2">
                <h4 class="m-1 h5 focom-vehicle-title">{{$article->title}}</h4>
                <p class="m-1 font-weight-normal h3 focom-vehicle-price" style="overflow: hidden;">${{$article->price}}</p>
                <div class="pt-3 m-1 d-flex">
                    <i class="fas fa-map-marker-alt fa-lg align-self-center mb-2"></i>
                    <p class="pl-1 h5 font-weight-normal pr-1 focom-vehicle-place">{{ $place }}</p>
                </div>
                <div class="">
                    
                </div>
            </div>
        </div>
    </a>
</article>
