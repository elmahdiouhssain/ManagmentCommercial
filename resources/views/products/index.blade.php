@extends('layouts.la')
@section('content')

	<script src="{{ asset('/js/jquery.min.js') }}"></script>
  	<script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
  	<script type="text/javascript" src="{{ asset('/js/ck/dataTables.buttons.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/ck/jszip.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/ck/pdfmake.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/ck/vfs_fonts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/ck/buttons.html5.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/ck/buttons.print.min.js') }}"></script>
  								<script type="text/javascript">
                                        $(document).ready(function() {
                                        $("#emptableid").DataTable({
                                                serverSide: true,
                                                ajax: {
                                                    url: '{{ route('products') }}',
                                                    data: function (data) {
                                                        data.params = {
                                                            sac: "helo"
                                                        }
                                                    }

                                                },
                                                buttons: true,
                                                searching: true,
                                                scrollY: 500,
                                                scrollX: false,
                                                scrollCollapse: true,
                                                dom: 'Bfrtip',
                                                buttons: ['copyHtml5',
                                                'excelHtml5',
                                                'csvHtml5',
                                                'pdfHtml5'],
                                                    columns: [
                                                    {data: "name", className: 'name'},
                                                    {data: "price", className: 'price'},
                                                    {data: "tax", className: 'tax'},
                                                    {data: "is_active", className: 'is_active'},
                                                    {data: "created_at", className: 'created_at'},
                                                    {
                                                    data: 'action', 
                                                    name: 'action', 
                                                    orderable: true, 
                                                    searchable: true
                                                },
                                                
                                                ]  
                                            });
                                        });
                            </script>

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


  		<!-- The Modal -->
		  <div class="modal fade" id="myModal">
		    <div class="modal-dialog modal-lg">
		      <div class="modal-content">
		      
		        <!-- Modal Header -->
		        <div class="modal-header">
		          <h4 class="modal-title"><i class="fas fa-box"></i> Ajouté un produit</h4>
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		        </div>
		        
		        
		        <!-- Modal body -->

		        <div class="modal-body">
		          	{!! Form::open(array('route' => 'newproduct','method'=>'POST')) !!}
                        @csrf
                                <div class="form-group">
                                    <label for="name">Produit : <span style="color:red;">required (*)</span></label>
                                    <input type="text" name="name" class="form-control" id="name"required="">
                                    @if ($errors->has('name'))
                                    <span style="color: red;">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="details">Description :</label>
                                    <textarea class="form-control" name="details"></textarea>
                                    @if ($errors->has('details'))
                                    <span style="color: red;">{{ $errors->first('details') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="price">Prix :</label>
                                    <input type="number" name="price" class="form-control" id="price"required="">
                                    @if ($errors->has('price'))
                                    <span style="color: red;">{{ $errors->first('price') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="tax">Tva prix :</label>
                                    <input type="text" name="tax" class="form-control" id="tax"required="">
                                    @if ($errors->has('tax'))
                                    <span style="color: red;">{{ $errors->first('tax') }}</span>
                                    @endif
                                </div>
                                
                                <div class="form-group">
                                    <button class="btn btn-danger btn-sm btn-block" type="submit">Enregistré</button>
                                    
                                </div>
                    {!! Form::close() !!}
		        </div>
		        
		        <!-- Modal footer -->
		        <div class="modal-footer">
		          <button type="button" class="btn btn-secondary" data-dismiss="modal">Quitté</button>
		        </div>
		        
		      </div>
		    </div>
		  </div>
		<center>
		<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#myModal">
    		<i class="fas fa-box"></i> Nouveau produit
  		</button><br>
  		@include('flash-message')
  	</center>
    <div class="card">
		<div class="table-responsive">
		        <table class="table table-striped" id="emptableid" width="100%">
		            <thead>
		                <tr>
		                  <th>Nom</th>
		                  <th>Prix</th>
		                  <th>Tva</th>
		                  <th>Disponiblité</th>
		                  <th>Enregistré à</th>
		                  <th>Action </th>
		                </tr>
		            </thead>
		        <tbody></tbody>
		        </table>                                
		</div>
        </div>
</div>

@endsection
