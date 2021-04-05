<?php
namespace App\Http\Services;
use App\Http\Repositories\ProductRepository;
use App\Models\Product;

class ProductService extends BaseService
{
    protected $productRepo;
    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    public function getById($id){
        return $this->productRepo->getById($id);
    }

    public function getAll(){
        return $this->productRepo->getAll();
    }
    public function store($request){
        $product = new Product();
        $product->fill($request->all());
        $path = $this->updateLoadFile($request, 'image', 'product-images');
        $product->image = $path;
        $this->productRepo->store($product);
    }

    function update($product, $request)
    {
        $product->fill($request->all());
        $path = $this->updateLoadFile($request, 'image', 'product-images');
        $product->image = $path;
        $this->productRepo->store($product);
    }

    public function delete($product){
        $this->productRepo->delete($product);
    }
}
