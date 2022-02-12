@extends('layouts.la')
@section('content')
<script src="{{ asset('/js/jquery.min.js') }}"></script>

<div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left"></h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item"></li>
                                    <li class="breadcrumb-item active"></li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <br><br>

                        <form action="/invoices/store/" method="POST">
                        @csrf
                            <div class="row">
                                <div class="col">
                                <div class="form-group">
                                    <label for="customer_id">Customer :</label>
                                    <select class="form-control" name="customer_name" id="customer_name">
                                        @foreach ($data['customers'] as $customer)
                                        <option value="{{ $customer->nom_complete }}">{{ $customer->nom_complete }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('customer_name'))
                                    <span style="color: red;">{{ $errors->first('customer_name') }}</span>
                                    @endif
                                    </div>
                                </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="supplier_id">Supplier :</label>
                                    <select class="form-control" name="supplier_name" id="supplier_name">
                                        @foreach ($data['suppliers'] as $supplier)
                                        <option value="{{ $supplier->vendor_name }}">{{ $supplier->vendor_name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('supplier_name'))
                                    <span style="color: red;">{{ $errors->first('supplier_name') }}</span>
                                    @endif
                                </div>
                                </div>
                            </div>
                        </form>

        <!-- The Modal -->
          <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title"><i class="fas fa-box"></i> Add new product to invoice</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <center>@include('flash-message')</center>
                    <div class="form-group">
                        <label>Product : </label>
                        <select class="designation form-control" name="designation" id="designation">
                        @foreach ($data['products'] as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Unit : </label>
                        <select class="uml form-control" id="uml" name="uml">
                   
                        <option value="U">U</option>
                        <option value="L">L</option>
                        <option value="ML">ML</option>
                        <option value="H">H</option>
                       
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Qte : </label>
                        <input type="number" id="qte" name="qte" placeholder="Quantity" class="qte form-control" />
                    </div>
                    <div class="form-group">
                        <label>Price : </label>
                        <input  type=number step=any id="p_u" name="p_u" placeholder="Price U" class="p_u form-control" />
                    </div>
                    <script>function findTotal() {
                            var p_t = 0;
                            var qte = document.getElementById("qte").value;
                            var p_u = document.getElementById("p_u").value;
                            var p_t = qte * p_u;
                            document.getElementById("p_t").value = p_t;
                                    }</script>
                    <div class="form-group">
                        <label>Total : </label>
                        <input readonly type=number step=any id="p_t"  onblur="findTotal()" name="p_t" placeholder="Total price" class="p_t form-control" />
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success btn-sm btn-block add_prod_invoice" id="add_prod_invoice" name="add_prod_invoice">ADD</button>
                    </div>

                </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                
              </div>
            </div>
          </div>
          

          <div class="card">
          <table class="table table-bordered" id="dynamicAddRemove">

                <br><tr>
                    <th>Product :</th>
                    <th>U :</th>
                    <th>Qte :</th>
                    <th>Price :</th>
                    <th>Total :</th>
                    <button type="button" name="add" id="dynamic-ar" class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus"></i> New Product</button>
                    <a href="" class="btn btn-success btn-sm btn-block"><i class="fas fa-eye"></i> Save & Preview</a>
                    <br><center>@include('flash-message')</center><br>
                </tr>
                <tr>
                    <td><input readonly type="text" id="designation" name="designation"  class="form-control" /></td>
                    <td><input readonly type="text" id="uml" name="uml"  class="form-control" /></td>
                    <td><input readonly type="number" id="qte" name="qte" class="form-control" /></td>
                    <td><input readonly type="text" id="p_u" name="p_u" class="form-control" /></td>
                    <td><input readonly type="text" id="p_t" name="p_t" class="form-control" /></td>
                    <td><a href=""></a><i class="fas fa-trash" style="color:red;"></i></td>
                    <script type="text/javascript"></script>
                    </tr>
                    </table>
                    <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                    <label for="total_tva">Status :</label>
                                    <select class="form-control" id="is_paid" name="is_paid">
                                        <option value="1" class="badge badge-success">PAID</label></option>
                                        <option value="0" class="badge badge-warning">UNPAID</label></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="total_ht">Released from :</label>
                                    <input readonly type=text step=any name="user_name" class="form-control" id="user_name" value="{{Auth::user()->name}}">

                                </div>
                                    </div>
                                <div class="col">
                                <div class="form-group">
                                    <label for="total_ht">Total price :</label>
                                    <input readonly type=number step=any name="total_ht" class="form-control" id="total_ht" required="">
                                    @if ($errors->has('total_ht'))
                                    <span style="color: red;">{{ $errors->first('total_ht') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="total_tva">Tax price :</label>
                                    <input readonly type=number step=any name="total_tva" class="form-control" id="total_tva"required="">
                                    @if ($errors->has('total_tva'))
                                    <span style="color: red;">{{ $errors->first('total_tva') }}</span>
                                    @endif
                                </div>

                                 </div>
                            </div>
                                <div class="form-group">
                                    <button class="btn btn-danger btn-sm btn-block" type="submit"><i class="fas fa-save"></i> Save</button>
                                </div>
            </div>
            <script>
              $(document).ready(function (){
                $(document).on('click', '.add_prod_invoice', function (e){
                    e.preventDefault();
                    var data = {
                        'designation':$('.designation').val(),
                        'uml':$('.uml').val(),
                        'qte':$('.qte').val(),
                        'p_u':$('.p_u').val(),
                        'p_t':$('.p_t').val(),
                    }
                    
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type:"POST",
                        url:"/invoices/store/product",
                        data:data,
                        dataType:"json",
                        success:function (response){
                            console.log(response);
                            if(response.status == 400){
                                $('#savedform_errList').html("");
                                $('#savedform_errList').addClass('alert alert-danger');
                                $.each(response.errors, function (key, err_values){
                                    $('#savedform_errList').append('<span>'+err_values+'</span>');
                                });
                            }
                            else{
                                $('#success_message').addClass('alert alert-success');
                                $('#success_message').text(response.message);
                                $('#myModal').modal('hide');
                                $('#myModal2').modal('show');

                            }
                        }
                    })
                })
              })
          </script>

          <!-- The Modal -->
          <div class="modal fade" id="myModal2">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <center><i class="fas fa-box fa-7x" style="color:green;"></i><br>
                            <h2  style="color:green;">Product Saved !</h2>
                        </center>
                    </div>
  
              </div>
            </div>
          </div>
        </div>
       
    </div>

@endsection
