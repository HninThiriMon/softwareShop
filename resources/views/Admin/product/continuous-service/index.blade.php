@extends('Admin.layout.master')
@section('admin-title','Our products')
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
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td>5</td>
                  <td>C</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.5
                  </td>
                  <td>Win 95+</td>
                  <td>5.5</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 6
                  </td>
                  <td>Win 98+</td>
                  <td>6</td>
                  <td>A</td>
                </tr>
             
                
              
               
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
    </div>
          <!-- /.box -->






<!--Start Modal -->
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
            <label for="name">Product Name</label>
            <input type="text" class="form-control" name="name" id="" required>
        </div>
        <div class="form-group">
            <label for="price_per_month">Price Per Month</label>
            <input type="text" class="form-control" name="price_per_month" id="" required>
        </div>
        <div class="form-group">
            <label for="description">Currency</label>
            
            <input type="text" class="form-control" name="basic_unit" id="" palceholder="MMK/USD" required>
        </div>
        
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="" cols="20" rows="5" required></textarea>
        </div>
        
        

        <div class="clearfix"></div>
  


 

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" class="continuousServiceCreate">Create</button>
      </div>
      </form>
</div>

    </div>
  </div>

</div>
<!--End Modal -->

@endsection

@section('admin-js-script')

@stop

@section('admin-js-script')
 
 <script>

 $( ".continuousServiceCreate" ).click(function() {
  alert("hello");
  console.log("hello");
	var name = $(".name").val();
  // var name = $(".name").val();
  // var name = $(".name").val();
  // var name = $(".name").val();
  alert(name);
	var data = {
				'_token' : "{{ csrf_token() }}",
				'name' : name
			};
	// 	$.post( "{{url('bkp/continuous_service/create')}}", data)
	// 		.done(function( data ) {
	// 			console.log(data);
			
	// 		});
	// }
  });

</script>
@stop