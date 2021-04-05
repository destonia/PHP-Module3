<?php


namespace App\Http\Repositories;


use App\Models\Brand;

class BrandRepo
{
public function getAll(){
    return Brand::all();
}
}
