<?php

namespace App\Http\Repositories;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductRepository
{
    public function getById($id){
        return Product::findOrFail($id);
    }

    public function getAll(){
        return Product::orderBy('id','DESC')->paginate(3);
    }
    public function store($product){
        $product->save();
    }
    public function delete($product){
        Storage::delete(asset('storage/'.$product['image']));
       /* $product->delete();*/
    }
}
