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
        		        <tbody>
                      @foreach ($data['invoices'] as $inv)
                      <tr>
                          <?php $cus_name = DB::select('select * from customers where id='.$inv->customer_id);?>
                          @if (!empty($cus_name))
                          <td>{{ $cus_name[0]->nom_complete }}</td>
                          @else
                          <td style="color: red;">--Clien supprimé--</td>
                          @endif

                          <td>{{ $inv->relase_date }}</td>
                          <td>{{ $inv->total_ht }}</td>
                          @if ($inv->is_paid == "1")
                          <td><label class="badge badge-success">PAID</label></td>
                            
                            @else
                            <td><label class="badge badge-danger">UNPAID</label></td>
                            @endif

                          <?php $sup_name = DB::select('select * from suppliers where id='.$inv->supplier_id);?>
                          <td>{{ $sup_name[0]->vendor_name }}</td>
   
                          <td>[ {{ $inv->user_name }} ]</td>
                          <td>{{ $inv->created_at }}</td>

                          <td><a href='/invoices/{{ $inv->id }}' class='btn btn-dark btn-sm'><i class='fas fa-cog'></i></a> <a href='/invoices/pdf/{{ $inv->id }}' target='_blank' class='btn btn-primary btn-sm'><i class='fas fa-eye'></i></a> <a href=''class='btn btn-success btn-sm'><i class='fas fa-save'></i></a></td>
                      </tr>
                      @endforeach      
                       
        		        </table>                                
        		</div>
                </div>
            </div>
      
            @endsection
