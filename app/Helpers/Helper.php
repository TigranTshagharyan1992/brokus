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
