<?php

namespace App\Helpers;

class Helper
{
    public static function getProducts()
    {
        $productsCookies = json_decode($_COOKIE['basket']);
        $productIds = [];
        $productCount = [];
        foreach ($productsCookies as $product){
            $productIds[] = $product->id;
            $productCount[$product->id] = $product->weight;
        }
        $products = GetData::getData(['entity_id' =>  $productIds]);

        return ['products' =>$products, 'productCount' => $productCount];
    }

    public static function dottyDate($str)
    {
        if( !empty($str) )
        {
            $str = substr($str, 0, 10);

            $chunks = explode("-", $str);
            if(count($chunks) === 1)
            {
                $chunks = explode('/', $str);
            }

            $chunks = array_reverse($chunks);

            return implode(".", $chunks);
        }
        else
        {
            return "";
        }
    }

    public static function getShortMonthString($number)
    {
        $voc = [
            "hy" => ["Հնվ", "Փտվ", "Մար", "Ապր", "Մայ", "Հուն", "Հուլ", "Օգս", "Սեպ", "Հոկ", "Նոյ", "Դեկ"],
            "en" => ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            "ru" => ["Янв", "Фев", "Мар", "Апр", "Май", "Июн", "Июл", "Авг", "Сен", "Окт", "Ноя", "Дек"],
            "fr" => ["Jan", "Fév", "Mar", "Avr", "Mai", "Jun", "Jul", "Août", "Sep", "Oct", "Nov", "Déc"],
        ];

        if(isset($voc[app()->getLocale()])) {
            return $voc[app()->getLocale()][$number - 1];
        } else {
            return $voc['en'][$number - 1];
        }
    }
    public static function getMonthString($number)
    {
        $voc = [
            "hy" => ["Հունվար", "Փետրվար", "Մարտ", "Ապրիլ", "Մայիս", "Հունիս", "Հուլիս", "Օգոստոս", "Սեպտեմբեր", "Հոկտեմբեր", "Նոյեմբեր", "Դեկտեմբեր"],
            "en" => ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            "ru" => ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
            "fr" => ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"],
        ];

        if(isset($voc[app()->getLocale()])) {
            return $voc[app()->getLocale()][$number - 1];
        } else {
            return $voc['en'][$number - 1];
        }
    }
    public static function prettyDate($str, $format=0)
    {
        $chunks = explode("-", substr($str, 0, 10));

        if($format === 1) {
            $month = self::getShortMonthString($chunks[1]);
        } else {
            $month = self::getMonthString($chunks[1]);
        }

        return $chunks[2]." ".$month.", ".$chunks[0];
    }

    public static function getUnit($product)
    {
        $unit = false;
        if(session()->has('bulk') && session('bulk')==true){
            if($product->entityData->ed_char_3) {
                $unit = $product->entityData->ed_char_3;
            }elseif($product->entityData->ed_char_4){
                $unit = $product->entityData->ed_char_4;
            }
        }else{
            if($product->entityData->ed_char_1) {
                $unit = $product->entityData->ed_char_1;
            }elseif($product->entityData->ed_char_2){
                $unit = $product->entityData->ed_char_2;
            }
        }

        return $unit;
    }

    public static function image($path)
    {
        $relativePath = str_replace("../", "", $path);

        $fullPath = getcwd()."/".$relativePath;
        if( is_file($fullPath) )
        {
            return $relativePath;
        }
        else
        {
            return false;
        }
    }

    public static function seoUrlOrId($obj)
    {
            if(isset($obj->entitySEO->es_url) && $obj->entitySEO->es_url)
            {
                return $obj->entitySEO->es_url;
            }
            else
            {
                return $obj->entity_id;
            }

    }


}
