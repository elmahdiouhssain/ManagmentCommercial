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
                                                    url: '{{ route('invoices') }}',
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
                                                    {data: "customer_name", className: 'customer_name'},
                                                    {data: "relase_date", className: 'relase_date'},
                                                    {data: "total_ht", className: 'total_ht'},
                                                    {data: "is_paid", className: 'is_paid'},
                                                    {data: "supplier_name", className: 'supplier_name'},
                                                    {data: "user_name", className: 'user_name'},
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
    		<center>
    		<a href="{{ route('createstep1') }}" class="btn btn-danger" >
        		<i class="fas fa-file-invoice"></i> Nouvelle facture
      		</a><br>
      		@include('flash-message')
      	    </center>
            <div class="card">
        		<div class="table-responsive">
        		        <table class="table table-striped" id="emptableid" width="100%">
        		            <thead>
        		                <tr>
        		                  <th>Facture pour</th>
        		                  <th>Date</th>
        		                  <th>Total</th>
                                  <th>Paiement</th>
        		                  <th>Fournisseur</th>
                                  <th>Facture par</th>
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
