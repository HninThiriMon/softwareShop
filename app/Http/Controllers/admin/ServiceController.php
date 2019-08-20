<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    
   

}
