@extends('layouts.la')
@section('content')
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
    		<center>
            <a href="" class="btn btn-success">
                <i class="fas fa-eye"></i> Save & Preview
            </a>
            <br><br>
      		@include('flash-message')
      	    </center>

            <div class="container">
            <div class="card">
                <br>
                    <form action="/invoices/store/" method="POST">
                        @csrf
                        <div class="container">
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
                           
                <table class="table table-bordered" id="dynamicAddRemove">

                <br><tr>
                    <th>Product name :</th>
                    <th>Quantity :</th>
                    <th>Price U :</th>
                    <th>Price Total :</th>
                    <button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary btn-sm btn-block"><i class="fas fa-plus"></i> New Product</button>
                </tr>
                <tr>
                    <td>
                        <select class="form-control" name="designation[0]" id="designation[0]">
                        @foreach ($data['products'] as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                        </select>
                    </td>

                    <td><input type="text" id="qte[0]" name="qte[0]" placeholder="Quantity" class="form-control" /></td>
                    <td><input type="text" id="p_u[0]" name="p_u[0]" placeholder="Price U" class="form-control" /></td>
                    <td><input type="text" id="p_t[0]" name="p_t[0]" placeholder="Total price" class="form-control" /></td>
                    <script type="text/javascript"></script>
                    </tr>
                    </table>
                                <div class="row">
                                    <div class="col">
                                    </div>
                                <div class="col">
                                <div class="form-group">
                                    <label for="total_ht">Total price :</label>
                                    <input type="string" name="total_ht" class="form-control" id="total_ht"required="">
                                    @if ($errors->has('total_ht'))
                                    <span style="color: red;">{{ $errors->first('total_ht') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="total_tva">Tax price :</label>
                                    <input type="text" name="total_tva" class="form-control" id="total_tva"required="">
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
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="{{ asset('/js/jquery.min.js') }}"></script>
                            <script type="text/javascript">
                fetch('/products/ajax/forselect', {
                method: 'GET', 
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'url': '/products/ajax/forselect',
                    "X-CSRF-Token": document.querySelector('input[name=_token]').value
                },
            })
        .then((resp) => resp.json())
        .then(function(data) {
            if (data) {
                data.forEach(function(prod) {
                    //console.log(prod.name);
                    let id_prod = prod.id;
                    let name_prod = prod.name;
                    //console.log(id_prod);
                });

                        var i = 0;
                        $("#dynamic-ar").click(function () {
                            ++i;
                            $("#dynamicAddRemove").append('<tr><td><select class="form-control"name="designation[' + i +
                                ']" id="designation[' + i +
                                ']"><option value="">'+ prod.id +'</option></select></td><td><input type="text" id="qte[' + i +
                                ']" name="qte[' + i +
                                ']" placeholder="Quantity" class="form-control" /></td><td><input type="text" id="p_u[' + i +
                                ']" name="p_u[' + i +
                                ']" placeholder="Price U" class="form-control" /></td><td><input type="text" id="total[' + i +
                                ']" name="p_t[' + i +
                                ']" placeholder="Total price" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field"><i class="fas fa-trash"></i></button></td></tr>'
                                );
                        });
                        $(document).on('click', '.remove-input-field', function () {
                            $(this).parents('tr').remove();
                        });

                } else {
                  console.log('connection failed');
            }
            })
            .catch(function(error) {
                console.log(error);
            });
                            </script>
@endsection