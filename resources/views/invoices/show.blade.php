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
                                    <label for="customer_id">Client :</label>
                                    <select readonly class="form-control" name="customer_name" id="customer_name">
                                       
                                        <option value="">{{ $data['invoice']->customer_name }}</option>
                                      
                                    </select>
                                  
                                    </div>
                                </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="supplier_id">Fournisseur :</label>
                                    <select readonly class="form-control" name="supplier_name" id="supplier_name">
                                      
                                        <option  value="">{{ $data['invoice']->customer_name }}</option>
                                        
                                    </select>
                               
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
                  <h4 class="modal-title"><i class="fas fa-box"></i> Ajouté un nouveau produit</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <center>@include('flash-message')</center>
                    <div class="form-group">
                        <label>Produit : </label>
                        <select class="designation form-control" name="designation" id="designation">
                            <option selected value="0">--Selectionner un produit--</option>
                        @foreach ($data['products'] as $product)
                        <option value="{{ $product->name }}">{{ $product->name }}</option>
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
                        <label>Prix : </label>
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
                        <button class="btn btn-success btn-sm btn-block add_prod_invoice" id="add_prod_invoice" name="add_prod_invoice">Ajouté</button>
                    </div>

                </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Quitté</button>
                </div>
                
              </div>
            </div>
          </div>
          

          <div class="card"><br>
          <table class="table table-bordered table-striped" >
                <thead>
                <tr>
                    <th>Produit :</th>
                    <th>U :</th>
                    <th>Qte :</th>
                    <th>Prix :</th>
                    <th>Total :</th>
                    <button type="button" name="add" id="dynamic-ar" class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus"></i> Nouveau produit</button>
                    <a href="" class="btn btn-success btn-sm btn-block"><i class="fas fa-eye"></i> Enregistré et testé</a>
                    <br><center>@include('flash-message')</center><br>
                </tr>
                </thead>
                <tbody></tbody>
                  </table>
                    <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="total_ht">Facturé par :</label>
                                    <input readonly type=text step=any name="user_name" class="form-control" id="user_name" value="{{Auth::user()->name}}">

                                </div>

                                    </div>
                                <div class="col">
                                <div class="form-group">
                                    <label for="total_ht">Total prix :</label>
                                    <input readonly type=number step=any name="total_ht" class="form-control" id="total_ht" required="">
                                    @if ($errors->has('total_ht'))
                                    <span style="color: red;">{{ $errors->first('total_ht') }}</span>
                                    @endif
                                </div>

                              

                                 </div>
                            </div>
                                <div class="form-group">
                                    <button class="btn btn-danger btn-sm btn-block" type="submit"><i class="fas fa-save"></i> Enregistré</button>
                                </div>
            </div>
            <script>
              $(document).ready(function (){
                fetchinvprod();

                function fetchinvprod(){
                    var full_url_invoice = document.URL;
                    var idofinvoicee = full_url_invoice.substring(full_url_invoice.lastIndexOf('/') + 1);
                    //console.log(idofinvoicee);
                    $.ajax({
                        type:"GET",
                        url:"/invoicesprod/json/"+idofinvoicee,
                        dataType:"json",
                        success:function (response){
                            //console.log(response);
                            $('tbody').html("");
                            $.each(response, function(key, item){
                                
                                $('tbody').append('<tr>\
                                    <td><input readonly type="text" id="designation" name="designation" value="'+item.designation+'" class="form-control" /></td>\
                                    <td><input readonly type="text" id="uml" name="uml" value="'+item.uml+'" class="form-control" /></td>\
                                    <td><input readonly type="number" id="qte" name="qte" class="form-control" value="'+item.qte+'" /></td>\
                                    <td><input readonly type="text" id="p_u" name="p_u" class="form-control" value="'+item.p_u+'"/></td>\
                                    <td><input readonly type="text" id="p_t" name="p_t" class="form-control" value="'+item.p_t+'"/></td>\
                                    <td><a class="fas fa-trash" style="color:red;" href="/invoices/prod/del/'+item.id+'" data-toggle="modal" data-target="#myModal3"></a><input type="hidden" name="prod_invoice_id" id="prod_invoice_id" value="'+item.id+'" ">\
                                    </td></tr>');

                                function findTotalInvoice(){
                                    var arr = document.getElementsByName('p_t');
                                    var tot=0;
                                    for(var i=0;i<arr.length;i++){
                                        if(parseInt(arr[i].value))
                                            tot += parseInt(arr[i].value);
                                    }
                                    console.log(tot);
                                    //document.getElementById('total').value = tot;
                                }

                           });
                    }
                });
                }
                $(document).on('click', '.delete_prod', function(e){
                    e.preventDefault();
                    var prod_id = $(this).val();
                    $('#delete_prod_id').val(prod_id);
                    $('#myModal3').modal('show');

                });
                $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                $(document).on('click', '.delete_prod_btn', function(e){
                    e.preventDefault();
                    var prod_id = $('#prod_invoice_id').val();
                    $.ajax({
                        type:"DELETE",
                        url:"/invoices/prod/del/"+prod_id,
                        data: {prod_id:prod_id},
                        success: function (response){
                            console.log(response);
                            $('#success_message').addClass('alert alert-success')
                            $('#success_message').text(response.message);
                            $('#myModal3').modal('hide');
                            fetchinvprod();
                        }
                    })
                })
                $(document).on('click', '.add_prod_invoice', function (e){
                    e.preventDefault();
                    var full_url = document.URL;
                    var idofinvoice = full_url.substring(full_url.lastIndexOf('/') + 1);
                    //console.log(idofinvoice);
                    var data = {
                        'invoice_id':idofinvoice,
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
                            //console.log(response);
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
                                $("#uml").val("");
                                $("#qte").val("");
                                $("#p_u").val("");
                                $("#p_t").val("");
                                fetchinvprod();

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
                            <h2  style="color:green;">Produit Enregistré !</h2>
                        </center>
                    </div>
  
              </div>
            </div>
          </div>
        </div>
        <!-- The Modal -->
          <div class="modal fade" id="myModal3">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <center><i class="fas fa-trash fa-7x" style="color:red;"></i><br>

                            <h2  style="color:red;">Vois etes sur supprimé le produit de cette facture !</h2>
                        </center>
                    </div>
              </div>

              <div class="modal-footer">
                  <button class="delete_prod_btn btn btn-danger">YES</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
              </div>
            </div>
          </div>
        </div>
       
    </div>

@endsection
