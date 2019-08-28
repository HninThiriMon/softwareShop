<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\model\ContinuousService;

class ProductController extends Controller
{
    protected $model;

    public function __construct(ContinuousService $continuousService)
    {
        // set the model
        $this->model = new Repository($continuousService);
    }
    
    public function productList()
    {
       
     $continuousServices = ContinuousService::all();

     return view('Product.productlist',compact('continuousServices'));

    }






}
