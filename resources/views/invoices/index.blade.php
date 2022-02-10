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
                                                    {data: "customer_id", className: 'customer_id'},
                                                    {data: "relase_date", className: 'relase_date'},
                                                    {data: "total_ht", className: 'total_ht'},
                                                    {data: "is_paid", className: 'is_paid'},
                                                    {data: "supplier_id", className: 'supplier_id'},
                                                    {data: "release_from", className: 'release_from'},
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
    		<a href="{{ route('createinvoices') }}" class="btn btn-danger" >
        		<i class="fas fa-file-invoice"></i> New Invoice
      		</a><br>
      		@include('flash-message')
      	    </center>
            <div class="card">
        		<div class="table-responsive">
        		        <table class="table table-striped" id="emptableid" width="100%">
        		            <thead>
        		                <tr>
        		                  <th>Invoice for</th>
        		                  <th>Release date</th>
        		                  <th>Total cost</th>
                                  <th>Paiement</th>
        		                  <th>Supplier</th>
                                  <th>Created by</th>
        		                  <th>Created_at</th>
        		                  <th>Action </th>
        		                </tr>
        		            </thead>
        		        <tbody></tbody>
        		        </table>                                
        		</div>
                </div>
            </div>
      
            @endsection
