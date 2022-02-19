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
                                                    url: '{{ route('customers') }}',
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
                                                    {data: "nom_complete", className: 'nom_complete'},
                                                    {data: "email", className: 'email'},
                                                    {data: "tele", className: 'tele'},
                                                    {data: "account_number", className: 'account_number'},
                                                    {data: "country", className: 'country'},
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
		          <h4 class="modal-title"><i class="fas fa-user-plus"></i> Nouveau client</h4>
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		        </div>
		        
		        
		        <!-- Modal body -->

		        <div class="modal-body">
		          	{!! Form::open(array('route' => 'newcustomer','method'=>'POST')) !!}
                        @csrf
                                <div class="form-group">
                                    <label for="nom_complete">Nom complèt : <span style="color:red;">required (*)</span></label>
                                    <input type="text" name="nom_complete" class="form-control" id="nom_complete"required="">
                                    @if ($errors->has('nom_complete'))
                                    <span style="color: red;">{{ $errors->first('nom_complete') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="currency">Gender :</label>
                                    <select class="form-control" name="gender">
                                        <option>Mr</option>
                                        <option>Mrs</option>
                                        <option>Miss</option>
                                    </select>
                                    @if ($errors->has('gender'))
                                    <span style="color: red;">{{ $errors->first('gender') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="email">Email :</label>
                                    <input type="email" name="email" class="form-control" id="email"required="">
                                    @if ($errors->has('email'))
                                    <span style="color: red;">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="tele">N°télèphone :</label>
                                    <input type="text" name="tele" class="form-control" id="tele"required="">
                                    @if ($errors->has('tele'))
                                    <span style="color: red;">{{ $errors->first('tele') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">N°compte :</label>
                                    <input type="text" name="account_number" class="form-control" id="account_number"required="">
                                    @if ($errors->has('account_number'))
                                    <span style="color: red;">{{ $errors->first('account_number') }}</span>
                                    @endif
                                </div>
                                <center>
                                <hr>ADDRESSE INFORMATIONS :<hr>
                                </center>
                                <div class="form-group">
                                    <label for="nom_complete">Pays :</label>
                                    <input type="text" name="country" class="form-control" id="country"required="">
                                    @if ($errors->has('country'))
                                    <span style="color: red;">{{ $errors->first('country') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">Ville :</label>
                                    <input type="text" name="city" class="form-control" id="city"required="">
                                    @if ($errors->has('city'))
                                    <span style="color: red;">{{ $errors->first('city') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">Code postal :</label>
                                    <input type="text" name="zipcode" class="form-control" id="zipcode"required="">
                                    @if ($errors->has('zipcode'))
                                    <span style="color: red;">{{ $errors->first('zipcode') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">Region :</label>
                                    <input type="text" name="province" class="form-control" id="province"required="">
                                    @if ($errors->has('province'))
                                    <span style="color: red;">{{ $errors->first('province') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">Addresse 1 :</label>
                                    <input type="text" name="addr1" class="form-control" id="addr1"required="">
                                    @if ($errors->has('addr1'))
                                    <span style="color: red;">{{ $errors->first('addr1') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">Addresse 2 :</label>
                                    <input type="text" name="addr2" class="form-control" id="addr2"required="">
                                    @if ($errors->has('addr2'))
                                    <span style="color: red;">{{ $errors->first('addr2') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">Note :</label>
                                    <textarea class="form-control" name="note"></textarea>
                                    @if ($errors->has('note'))
                                    <span style="color: red;">{{ $errors->first('note') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="currency">Devise :</label>
                                    <select class="form-control" name="currency">
                                    	<option>DOLLAR ($)</option>
                                    	<option>EURO (€)</option>
                                        <option>CHF (£)</option>
                                    </select>
                                    @if ($errors->has('currency'))
                                    <span style="color: red;">{{ $errors->first('currency') }}</span>
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
		<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
    		<i class="fas fa-user-plus"></i> Nouveau client
  		</button><br>
  		@include('flash-message')
  	</center>
    <div class="card">
		<div class="table-responsive">
		        <table class="table table-striped" id="emptableid" width="100%">
		            <thead>
		                <tr>
		                  <th>Nom complèt</th>
		                  <th>Email</th>
		                  <th>Télèphone</th>
		                  <th>N°compte</th>
		                  <th>Pays</th>
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
