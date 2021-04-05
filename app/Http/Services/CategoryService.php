<?php


namespace App\Http\Services;


use App\Http\Repositories\CategoryRepo;

class CategoryService
{
    /**
     * @var CategoryRepo
     */
    private CategoryRepo $categoryRepo;

    public function __construct(CategoryRepo $categoryRepo){
        $this->categoryRepo = $categoryRepo;
    }
function getAll(){
    return $this->categoryRepo->getAll();
}
}
