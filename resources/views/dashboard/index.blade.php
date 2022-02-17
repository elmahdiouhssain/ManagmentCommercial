@extends('layouts.la')
@section('content')

<link href="{{ asset('/css/dash.css') }}" rel="stylesheet" media="screen">
<br><br><br><br>
<div class="container bootstrap snippets bootdey">
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="panel panel-dark panel-colorful">
                <div class="panel-body text-center">
                	<p class="text-uppercase mar-btm text-sm">Clients</p>
                	<i class="fa fa-users fa-5x"></i>
                	<hr>
                	<p class="h2 text-thin">{{$data['c_count']}}</p>
                	<small><span class="text-semibold">{{ $data['admin_count'] }}</span> Administrateurs</small>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
        	<div class="panel panel-danger panel-colorful">
        		<div class="panel-body text-center">
        			<p class="text-uppercase mar-btm text-sm">Produits</p>
        			<i class="fas fa-box fa-5x"></i>
        			<hr>
        			<p class="h2 text-thin">{{$data['p_count']}}</p>
        			<small><span class="text-semibold"><i class="fa fa-unlock-alt fa-fw"></i> {{ $data['pactive_count']}} </span>Produits Disponible</small>
        		</div>
        	</div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
        	<div class="panel panel-primary panel-colorful">
        		<div class="panel-body text-center">
        			<p class="text-uppercase mar-btm text-sm">Factures</p>
        			<i class="fas fa-file-invoice fa-5x"></i>
        			<hr>
        			<p class="h2 text-thin">{{$data['i_count']}}</p>
        			<small><span class="text-semibold"><i class="fa fa-shopping-cart fa-fw"></i> {{$data['inv_count_total']}}</span> Total ventes</small>
        		</div>
        	</div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
        	<div class="panel panel-info panel-colorful">
        		<div class="panel-body text-center">
        			<p class="text-uppercase mar-btm text-sm">Facture payé</p>
        			<i class="fa fa-shopping-cart fa-5x"></i>
        			<hr>
        			<p class="h2 text-thin">{{$data['paid_count']}}</p>
        			<small><span class="text-semibold"><i class="fa fa-dollar fa-fw"></i> {{$data['totalAmount']}} £</span> Revenue aujourdhui</small>
        		</div>
        	</div>
        </div>        
	</div>
</div>

@endsection
