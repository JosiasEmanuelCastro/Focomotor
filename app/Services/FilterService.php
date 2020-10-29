<?php
namespace App\Services;

use View;
use App\Models\Category;

class FilterService {

    public static $message;

    public static function get($filter, $value)
    {

        switch ($filter) {
            case 'price':
                self::$message = self::betweenPrice($value);
                break;
            case 'kilometer':
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
        $title = ($value) ? $value : $item[0]->$filter;
        $count = count($item);

        $params = http_build_query(array_merge(request()->all(), [$filter => $title]));

        return View::make('elements.filters.item', compact('params', 'title', 'count'));

    }

    public static function getLinkBetweenWithCount($total, $filter, $from, $to, $message)
    {
        
        $item = $total->whereBetween($filter, [$from, $to]);
        $count = count($item);
        $request = http_build_query(array_merge(request()->all(), [$filter => "$from,$to"]));

        return View::make('elements.filters.item-between', compact('request', 'item', 'count', 'message'));

    }

    

}