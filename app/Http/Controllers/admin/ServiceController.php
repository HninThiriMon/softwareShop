<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Repository;
// use App\

class ServiceController extends Controller
{
    
   public function onetimeService()
   {
        return view('Admin.product.onetime-service.index');
   }
    
   public function continuousService()
   {
     
        return view('Admin.product.continuous-service.index');
   }
    
   public function continuousServiceCreate()
   {
     // dd("continuousServiceCreate");







     return view('Admin.product.continuous-service.index');
   }

}
