@foreach ($request as $key => $param)
    <a class='badge badge-primary font-weight-bold m-1' 
    href='/listado?{{http_build_query(request()->except($key))}}'>
    {{ Filter::get($key, $param) }}
    <i class='fas fa-times pl-2'></i></a>
@endforeach