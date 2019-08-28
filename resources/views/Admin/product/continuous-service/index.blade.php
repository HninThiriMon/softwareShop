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
  
  <table id="example" class="display" width="100%"></table>


  <!-- <table class="table table-bordered">
        <tr>
            <th>Product Name</th>
            <th>Price Per Month</th>
            <th>Currency</th>
            <th>Prolongation Period</th>
            <th>Description  </th>
            <th width="180" class="text-center">Action</th>
        </tr>
        <tbody id="tbody">

        </tbody>
    </table> -->





<!-- Start Modal -->
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
<!--End Modal -->





@endsection

@section('admin-js-files')
<script>

var dataSet = [
    [ "Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011/04/25", "$320,800" ],
    [ "Sonya Frost", "Software Engineer", "Edinburgh", "1667", "2008/12/13", "$103,600" ],
    [ "Jena Gaines", "Office Manager", "London", "3814", "2008/12/19", "$90,560" ],
    [ "Quinn Flynn", "Support Lead", "Edinburgh", "9497", "2013/03/03", "$342,000" ],
    [ "Charde Marshall", "Regional Director", "San Francisco", "6741", "2008/10/16", "$470,600" ],
    [ "Gloria Little", "Systems Administrator", "New York", "1721", "2009/04/10", "$237,500" ],
    [ "Bradley Greer", "Software Engineer", "London", "2558", "2012/10/13", "$132,000" ],
    [ "Gavin Joyce", "Developer", "Edinburgh", "8822", "2010/12/22", "$92,575" ],
    [ "Jennifer Chang", "Regional Director", "Singapore", "9239", "2010/11/14", "$357,650" ],    
    [ "Unity Butler", "Marketing Designer", "San Francisco", "5384", "2009/12/09", "$85,675" ]
];
 
$(document).ready(function() {
    $('#example').DataTable( {
        data: dataSet,
        columns: [
            { title: "Name" },
            { title: "Position" },
            { title: "Office" },
            { title: "Extn." },
            { title: "Start date" },
            { title: "Salary" }
        ]
    } );
} );


















// $.get( "{{url('bkp/continuous_service/show')}}", function( data ) {
//   alert("Hello");
//   var htmls = [];
//         // $.each(value, function (index, value) {
//         //     if (value) {
//                 htmls.push('<tr>\
//         		<td>name </td>\
//         		<td>email</td>\
//         		<td><button data-toggle="modal" data-target="#update-modal" class="btn btn-info updateData" data-id="">Update</button>\
//         		<button data-toggle="modal" data-target="#remove-modal" class="btn btn-danger removeData" data-id="">Delete</button></td>\
//         	</tr>');
//             // }
//             // lastIndex = index;
//         // });
//         $('#tbody').html(htmls);

//   // $( "body" )
//   //   .append( "Name: " + data.name ) // John
//   //   .append( "Time: " + data.time ); //  2pm

// }, "json" );






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
        console.log(data);
        alert( "Data Loaded: " + data );

      });


//Set
// $('#txt_name').val(bla);



    });


</script>
@stop

