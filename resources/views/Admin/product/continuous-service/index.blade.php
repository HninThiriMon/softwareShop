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

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        
      <form action="{{url('continuous_service/create')}}" method="post">
      @csrf
      name<input type="text" name="name"  />
      price_per_month<input type="text" name="price_per_unit"  />
      description<input type="text" name="description"  />

     

 

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="">Save changes</button>
      </div>
      </form>
    </div>
  </div>

</div>
<!--End Modal -->

@endsection

@section('admin-js-script')

@stop

@section('admin-js-script')

<script>


</script>
@stop