<?php

namespace App\Http\Controllers\dtable;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Repository;
use App\model\OneTimeService;
use Redirect,Response;

class OneTimeServiceAjaxCrudController extends Controller
{
    protected $model;

     public function __construct(OneTimeService $oneTimeService)
     {
         // set the model
         $this->model = new Repository($oneTimeService);
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
            {
                return datatables()->of(OneTimeService::latest()->get())
                        ->addColumn('action', function($data){
                        $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-success edit-post">Edit</a>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<a href="javascript:void(0);" id="delete-post" data-toggle="tooltip" data-original-title="Delete" data-id="'.$data->id.'" class="delete btn btn-danger">   Delete</a>';
                        return $button;
                        })
                        ->rawColumns(['action'])
                        ->make(true);
            }
            return view('Admin.product.onetime-service.dtable');
    }
     
     
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $postId = $request->post_id;
        $post   =   OneTimeService::updateOrCreate(['id' => $postId],
                    ['name' => $request->name, 'price' => $request->price]);           
        return Response::json($post);
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {   
        $where = array('id' => $id);
        $post  = OneTimeService::where($where)->first();
     
        return Response::json($post);
    }
     
     
    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        $post = OneTimeService::where('id',$id)->delete();
     
        return Response::json($post);
    }
}
