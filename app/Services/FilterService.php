<?php
namespace App\Services;

use View;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class FilterService {

    public static $message;

    public static function get($filter, $value)
    {

        switch ($filter) {
            case 'price':
                self::$message = self::betweenPrice($value);
                break;
            case 'kilometers':
                self::$message = self::betweenKilometer($value);
                break;

            case 'type':
                self::$message = Category::find($value)->name;
                break;
            
            default:
                self::$message = "$filter: $value";
                break;
        }
        return self::$message;
    }

    public static function betweenPrice($filter)
    {
        $message = explode(",",$filter);

         return "Desde $$message[0], hasta $$message[1]";
    }

    public static function betweenKilometer($filter)
    {
        $message = explode(",",$filter);

         return "Desde $message[0]km, hasta $message[1]km";
    }

    public static function display()
    {
        $request = request()->except("order", "sort", "page");

        return View::make('elements.filters.display', compact('request'));
    }

    public static function getLinkWithCount($filter, $item, $value = null)
    {
        $title = $item->$filter;
    
        $count = $item->total;

        $params = http_build_query(array_merge(request()->all(), [$filter => $title]));

        return View::make('elements.filters.item', compact('params', 'title', 'count'));

    }

    public static function getLinkBetweenWithCount($query, $filter, $from, $to, $message)
    {

        $count = $query->whereBetween($filter, [$from, $to])->select( DB::raw('count(*) as total'))->get();

        $count = $count->first()->total;
    
        $request = http_build_query(array_merge(request()->all(), [$filter => "$from,$to"]));

        return View::make('elements.filters.item-between', compact('request', 'count', 'message'));

    }

    

}