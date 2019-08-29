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

        $this->validate($request, [
          'id' => 'required',
          'name' => 'required',
          'price_per_unit' => 'required',
          'basic_unit' => 'required',
          'default_automatic_prolongation_period' => 'required',
          'description' => 'required',
      ]);
      $continuousService = ContinuousService::findOrFail($request->id);
      $continuousService->name = $request->name ;
      $continuousService->price_per_unit = $request->price_per_unit ;
      $continuousService->basic_unit = $request->basic_unit ;
      $continuousService->default_automatic_prolongation_period = $request->default_automatic_prolongation_period ;
      $continuousService->description = $request->description ;
      $continuousService->save();

      //  $id = $request->id;
      // $this->model->update($request->only($this->model->getModel()->fillable), $id);

      return $this->model->find($id);

   }

   public function continuousServiceDestroy( $id )
   {
     
       ContinuousService::destroy($id);

          return redirect('bkp/continuous_service');

   }

  // public function continuousServiceDestroy($id)
  // {
  //   if(ContinuousService::destroy($id)) {
  //     return redirect('addPortfolio')->with('success', 'The image has been successfully deleted!');
  //   } else {
  //     return redirect('addPortfolio')->with('error', 'Please try again!');
  //   }
  // }

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
