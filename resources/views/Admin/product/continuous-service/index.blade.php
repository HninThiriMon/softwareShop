@extends('Admin.layout.master')
@section('admin-title','Our products')
@section('style-files')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

@stop
@section('content-header')
    <h1>
        Long Term Service <small>Product</small>
    </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Product</a></li>
        <li class="active">Long Term Service</li>
      </ol>
@endsection
@section('admin-content')

  <div class="callout">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
      Create Product
      </button>
  </div>
  
  <!-- /.box -->
  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Description</th>
                  <th>Price Per Month</th>
                  <th>Currency</th>
                  <th>Prolongation Period</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

              @foreach($continuousServices as $continuousService)
              <tr>
              
                  <td>{{$continuousService->name}}</td>
                  <td>{{$continuousService->description}}</td>
                  <td>{{$continuousService->price_per_unit}}</td>
                  <td>{{$continuousService->basic_unit}}</td>
                  <td>{{$continuousService->default_automatic_prolongation_period}}</td>
                  <td>
                  <a href="" data-toggle="modal" data-target="#editModal" id="{{$continuousService->id}}" class="edit btn btn-success" onClick="editContinuousService(this.id)">Edit</a>
                  &nbsp;&nbsp;
                  <a href="{{url('bkp/deleteContinuousService/'.$continuousService->id)}}" data-toggle="tooltip" data-original-title="Delete" class="delete btn btn-danger">Delete</a>
                




                  </td>
                  
                </tr>


              @endforeach

                
               
            
                </tbody>
                <!-- <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot> -->
              </table>
            </div>
            <!-- /.box-body -->
    </div>
          <!-- /.box -->















<!-- Create Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="well well bs-compnent">
    <legend>
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       <h3 class="modal-title" id="exampleModalLabel">Long Term Service Product Create Form</h3>
      </div>
      </legend>
      <div class="modal-body">
      
            <form>
                <div class="form-group">
                    <label for="name" >Product Name</label>
                    <input id="name" type="text" class="form-control" name="name" placeholder="Product Name"
                           required autofocus>
                </div>
                <div class="form-group">
                    <label for="email" >Price Per Month</label>
                    <input id="price_per_month" type="text" class="form-control" name="price_per_month" placeholder="Price Per Month"
                           required autofocus>
                </div>
                <div class="form-group" mb-2>
                    <label for="currency" >Currency</label>
                    <select id="currency">
                      <option value="MMK">MMK</option>
                      <option value="USD">USD</option>
                    </select>
                </div>
                <div class="form-group" mx-sm-3 mb-2>
                <label for="default_automatic_prolongation_period" >Default Automatic Prolongation Period</label>
                    <select id="default_automatic_prolongation_period">
                   
                    <option value="6">6 Month</option>
                    <option value="16">1 Year</option>
                    <option value="18">2 Years</option>
                    <option value="24">3 Years</option>
                    <option value="30">4 Years</option>
                    <option value="36">5 Years</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control" name="description" id="description" cols="20" rows="5" required></textarea>
              </div>
          
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        
        <button class="btn btn-primary" id="submitCustomer" >Create</button>
      </div>
      </form>
</div>
    </div>
  </div>
</div>
<!--Create Modal -->




<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="well well bs-compnent">
    <legend>
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       <h3 class="modal-title" id="exampleModalLabel">Long Term Service Product Create Form</h3>
      </div>
      </legend>
      <div class="modal-body">
      
            <form>
                <div class="form-group">
                    <label for="name" >Product Name</label>
                    <input id="edit_name" type="text" class="form-control" name="edit_name" placeholder="Product Name"
                           required autofocus>
                </div>
                <div class="form-group">
                    <label for="edit_price_per_month" >Price Per Month</label>
                    <input id="edit_price_per_month" type="text" class="form-control" name="edit_price_per_month" placeholder="Price Per Month"
                           required autofocus>
                </div>
                <div class="form-group" mb-2>
                    <label for="edit_currency" >Currency</label>
                    <select id="edit_currency">
                      <option value="MMK">MMK</option>
                      <option value="USD">USD</option>
                    </select>
                </div>
                <div class="form-group" mx-sm-3 mb-2>
                <label for="edit_default_automatic_prolongation_period" >Default Automatic Prolongation Period</label>
                    <select id="edit_default_automatic_prolongation_period">
                   
                    <option value="6">6 Month</option>
                    <option value="16">1 Year</option>
                    <option value="18">2 Years</option>
                    <option value="24">3 Years</option>
                    <option value="30">4 Years</option>
                    <option value="36">5 Years</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="edit_description">Description</label>
                  <textarea class="form-control" name="edit_description" id="edit_description" cols="20" rows="5" required></textarea>
              </div>
          <input type="hidden" name="" id="updateC_id">
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" id="updateContinuousService">Update</button>
      </div>
      </form>
</div>
    </div>
  </div>
</div>
<!--Edit Modal -->










@endsection

@section('admin-js-files')
<script>

$('#submitCustomer').on('click', function () {
    var name = $('#name').val();
    var price_per_unit = $('#price_per_month').val();
    var description = $('#description').val();
    var basic_unit = $( "#currency" ).val();
    var default_automatic_prolongation_period = $( "#default_automatic_prolongation_period" ).val();

   var data = {
        '_token' : "{{csrf_token()}}",
        'name' : name ,
        'price_per_unit' : price_per_unit ,
        'description' : description ,
        'basic_unit' : basic_unit ,
        'default_automatic_prolongation_period' : default_automatic_prolongation_period,
   };
     $.post( "{{url('bkp/continuous_service/create')}}", data)
    .done(function( data ) {
        

      });
//Set
// $('#txt_name').val(bla);
    });


    function editContinuousService(id)
      {
        var data = {
        'id' : id ,
       };

      $.get( "{{url('bkp/continuous_service/edit')}}", data )
      .done(function( data ) {
        $('#edit_name').val(data.name);
        $('#edit_price_per_month').val(data.price_per_unit);
        $('#edit_description').val(data.description);
        $('#edit_currency').val(data.basic_unit);
        $('#edit_default_automatic_prolongation_period').val(data.default_automatic_prolongation_period);
        $('#updateC_id').val(data.id);
      });
    }

    // function deleteContinuousService(id)
    //   {
        
    //     var data = {
    //     'id' : id ,
    //    };
    //    $.get( "{{url('bkp/continuous_service/delete')}}",data )
    //   .done(function( data ) {

    //     alert(data);
    //     console.log(data);

    //   });

    //   }





    $('#updateContinuousService').on('click', function () {
        var update_id = $('#updateC_id').val();
        var update_name = $('#edit_name').val();
        var update_price_per_unit = $('#edit_price_per_month').val();
        var update_description = $('#edit_description').val();
        var update_basic_unit = $( "#edit_currency" ).val();
        var update_default_automatic_prolongation_period = $( "#edit_default_automatic_prolongation_period" ).val();

      var data = {
            '_token' : "{{csrf_token()}}",
            'id' : update_id ,
            'name' : update_name ,
            'price_per_unit' : update_price_per_unit ,
            'description' : update_description ,
            'basic_unit' : update_basic_unit ,
            'default_automatic_prolongation_period' : update_default_automatic_prolongation_period,
      };
        $.post( "{{url('bkp/continuous_service/update')}}", data)
        .done(function( data ) {
            console.log(data);
          
          });
    
    });




</script>
@stop

