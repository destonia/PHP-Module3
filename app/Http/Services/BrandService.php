<?php


namespace App\Http\Services;


use App\Http\Repositories\BrandRepo;

class BrandService
{
    /**
     * @var BrandRepo
     */
    private BrandRepo $brandRepo;

    public function __construct(BrandRepo $brandRepo)
    {
        $this->brandRepo = $brandRepo;
    }
    public function getAll(){
        return $this->brandRepo->getAll();
    }
}
