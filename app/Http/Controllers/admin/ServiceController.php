<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Repository;
use App\model\ContinuousService;

class ServiceController extends Controller
{
     protected $model;

     public function __construct(ContinuousService $continuousService)
     {
         // set the model
         $this->model = new Repository($continuousService);
     }

   public function onetimeService()
   {
        return view('Admin.product.onetime-service.index');
   }
    
   public function continuousService()
   {
    
     $continuousServices = ContinuousService::all();

     return view('Admin.product.continuous-service.index',compact('continuousServices'));

   }
    
   public function continuousServiceEdit(Request $request)
   {
     $continuousService = ContinuousService::findOrFail($request->id);
       return $continuousService;
   }

   public function continuousServiceUpdate(Request $request)
   {

     // return $request->all();

     // $this->validate($request, [
     //      'id' => 'required',
     //      'name' => 'required',
     //      'price_per_unit' => 'required',
     //      'basic_unit' => 'required',
     //      'default_automatic_prolongation_period' => 'required',
     //      'description' => 'required',
         
     //  ]);
      $id = $request->id;

      $this->model->update($request->only($this->model->getModel()->fillable), $id);

      return $this->model->find($id);

   }

   public function continuousServiceDestroy($id)
   {
       return $this->model->delete($id);
   }

   public function continuousServiceCreate(Request $request)
   {
     
     $this->validate($request, [
          'name' => 'required',
          'price_per_unit' => 'required',
          'basic_unit' => 'required',
          'default_automatic_prolongation_period' => 'required',
          'description' => 'required',
         
      ]);
    
      return $this->model->create($request->only($this->model->getModel()->fillable));
   }

   public function continuousServiceShow(Request $request)
   {
        return "continuousServiceShow";


   }

}
