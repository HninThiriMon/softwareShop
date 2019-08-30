<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromotionController extends Controller
{
   public function promotionPackage()
   {
       return view('Admin.promotion.promotion-package');
   }
}
