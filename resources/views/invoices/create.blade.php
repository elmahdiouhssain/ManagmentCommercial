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
                    <th>Nom produit :</th>
                    <th>Quantité :</th>
                    <th>PrixU(DHS) :</th>
                    <th>Total(DHS) :</th>
                    <button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary btn-sm btn-block"><i class="fas fa-plus"></i> New Product</button>
                </tr>
                <tr>
                    <td><input type="text" id="produit_name[0]" name="produit_name[0]" placeholder="Nom du produit" class="form-control" /></td>
                    <td><input type="text" id="quantite[0]" name="quantite[0]" placeholder="Quantité" class="form-control" /></td>
                    <td><input type="text" id="prix_u[0]" name="prix_u[0]" placeholder="PrixU" class="form-control" /></td>
                    <td><input type="text" id="total[0]" name="total[0]" placeholder="Total" class="form-control" /></td>
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
                                var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><input type="text" name="produit_name[' + i +
            ']" id="produit_name[' + i +
            ']" placeholder="Nom du produit" class="form-control" /></td><td><input type="text" id="quantite[' + i +
            ']" name="quantite[' + i +
            ']" placeholder="Quantite" class="form-control" /></td><td><input type="text" id="prix_u[' + i +
            ']" name="prix_u[' + i +
            ']" placeholder="PrixU" class="form-control" /></td><td><input type="text" id="total[' + i +
            ']" name="total[' + i +
            ']" placeholder="Total" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field"><i class="fas fa-trash"></i></button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
                            </script>
@endsection