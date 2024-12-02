<?php

namespace App\Classes\Admin\Products;

use App\Http\Controllers\Controller;
use App\Classes\Admin\Data\CheckData;

use App\Interfaces\Filters;

class MobileFilter extends Controller implements Filters
{
    public function filter($products,$filter)
    {
        if(!CheckData::isNUll($filter->model))
        {
            $products=$products->where("model","LIKE","%".$filter->model."%");
        }
        if(!CheckData::isNUll($filter->price))
        {
            $products=$products->where("price","<=",$filter->price);
        }
        if(!CheckData::isNUll($filter->rating))
        {
            $products=$products->having("rating",$filter->rating);
        }
        if(!CheckData::isNUll($filter->ram))
        {
            $products=$products->where("ram",$filter->ram);
        }
        if(!CheckData::isNUll($filter->camera))
        {
            $products=$products->where("camera",$filter->camera);
        }
        return $products;
    }
}
