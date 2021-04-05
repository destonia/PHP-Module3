<?php


namespace App\Http\Repositories;


use App\Models\Category;

class CategoryRepo
{
function getAll(){
    return Category::all();
}
}
