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

        View::make('elements.filters.display', compact('request'));

        $html = "";

        foreach (request()->except("order", "sort", "page") as $key => $param) {
            $html .= "<a class='badge badge-primary font-weight-bold m-1' href='/listado?";
            $html .= http_build_query(request()->except($key));
            $html .= "'>";
            $html .= self::get($key, $param);
            $html .= "<i class='fas fa-times pl-2'></i></a>";
        }

        return $html;
    }

    public static function getLinkWithCount($filter, $item, $value = null)
    {
        $data = ($value) ? $value : $item[0]->$filter;

        $params = http_build_query(array_merge(request()->all(), [$filter => $data]));
        return "<a href='/listado?$params' class='d-block text-dark text-decoration-none pb-1 focom-filters-locationref'>" . $data . " (" . count($item). ")</a>";
    }

    public static function getLinkBetweenWithCount($total, $filter, $from, $to, $message)
    {
        $item = $total->whereBetween($filter, [$from, $to]);
        $count = count($item);

        $link = "<a href='/listado?";
        $link .= http_build_query(array_merge(request()->all(), [$filter => "$from,$to"]));
        $link .= "' class='d-block text-dark text-decoration-none pb-1 focom-filters-locationref'>";
        $link .= $message;
        $link .= " ($count)</a>";

        return $link;
    }

    

}