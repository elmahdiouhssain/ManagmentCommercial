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
                        <form action="/invoices/store/" method="POST">
                        @csrf
                            <div class="row">
                                <div class="col">
                                <div class="form-group">
                                    <label for="customer_id">Customer :</label>
                                    <select class="form-control" name="customer_id" id="customer_id">
                                        @foreach ($data['customers'] as $customer)
                                        <option value="{{ $customer->id }}">{{ $customer->nom_complete }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('customer_id'))
                                    <span style="color: red;">{{ $errors->first('customer_id') }}</span>
                                    @endif
                                    </div>
                                </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="supplier_id">Supplier :</label>
                                    <select class="form-control" name="supplier_id" id="supplier_id">
                                        @foreach ($data['suppliers'] as $supplier)
                                        <option value="{{ $supplier->id }}">{{ $supplier->vendor_name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('supplier_id'))
                                    <span style="color: red;">{{ $errors->first('customer_id') }}</span>
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
                    <div class="form-group">
                        <label>Select Product : </label>
                        <select class="designation form-control" name="designation" id="designation">
                        @foreach ($data['products'] as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Select Unit : </label>
                        <input type="text" id="uml" name="uml" placeholder="Unity" class="uml form-control" />
                    </div>
                    <div class="form-group">
                        <label>Quantity : </label>
                        <input type="number" id="qte" name="qte" placeholder="Quantity" class="qte form-control" />
                    </div>
                    <div class="form-group">
                        <label>Price Unit : </label>
                        <input type="text" id="p_u" name="p_u" placeholder="Price U" class="p_u form-control" />
                    </div>
                    <div class="form-group">
                        <label>Total amount : </label>
                        <input type="text" id="p_t" name="p_t" placeholder="Total price" class="p_t form-control" />
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
                    <th>Product name :</th>
                    <th>Unity :</th>
                    <th>Quantity :</th>
                    <th>Price U :</th>
                    <th>Price Total :</th>
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
                                $('#success_message').addClass('alert alert-success')
                                $('#success_message').text(response.message)
                            }
                        }
                    })
                })
              })
          </script>
       
    </div>

@endsection
