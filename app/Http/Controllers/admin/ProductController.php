<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Services\BrandService;
use App\Http\Services\CategoryService;
use App\Http\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    private CategoryService $categoryService;
    private BrandService $brandService;
    private ProductService $productService;


    public function __construct(
        CategoryService $categoryService,
        BrandService $brandService,
        ProductService $productService)
    {
        $this->categoryService = $categoryService;
        $this->brandService = $brandService;
        $this->productService = $productService;

    }

    public function index()
    {
        $products = $this->productService->getAll();
        return view('admin.home',compact('products'));
    }

    public function add()
    {
        $brands = $this->brandService->getAll();
        $categories = $this->categoryService->getAll();
        return view('admin.product-create', compact('categories', 'brands'));
    }

    public function store(Request $request)
    {
        $this->productService->store($request);
        return redirect()->route('products.index');
    }

    public function edit($id){
        $product = $this->productService->getById($id);
        $brands = $this->brandService->getAll();
        $categories = $this->categoryService->getAll();
        return view('admin.product-edit',compact("product","brands","categories"));
    }
    function update($id, Request $request)
    {
        $product = $this->productService->getById($id);
        $this->productService->update($product, $request);
        return redirect()->route('products.index');
    }

    public function delete($id){
        $product = $this->productService->getById($id);
        $this->productService->delete($product);
        return redirect()->route('products.index');
    }

}
