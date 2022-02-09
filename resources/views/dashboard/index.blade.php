@extends('layouts.la')
@section('content')

<link href="{{ asset('/css/dash.css') }}" rel="stylesheet" media="screen">
<br><br><br><br>
<div class="container bootstrap snippets bootdey">
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="panel panel-dark panel-colorful">
                <div class="panel-body text-center">
                	<p class="text-uppercase mar-btm text-sm">Customers</p>
                	<i class="fa fa-users fa-5x"></i>
                	<hr>
                	<p class="h2 text-thin">254,487</p>
                	<small><span class="text-semibold">7%</span> Higher than yesterday</small>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
        	<div class="panel panel-danger panel-colorful">
        		<div class="panel-body text-center">
        			<p class="text-uppercase mar-btm text-sm">Products</p>
        			<i class="fas fa-box fa-5x"></i>
        			<hr>
        			<p class="h2 text-thin">873</p>
        			<small><span class="text-semibold"><i class="fa fa-unlock-alt fa-fw"></i> 154</span> Unapproved products</small>
        		</div>
        	</div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
        	<div class="panel panel-primary panel-colorful">
        		<div class="panel-body text-center">
        			<p class="text-uppercase mar-btm text-sm">Invoices</p>
        			<i class="fas fa-file-invoice fa-5x"></i>
        			<hr>
        			<p class="h2 text-thin">2,423</p>
        			<small><span class="text-semibold"><i class="fa fa-shopping-cart fa-fw"></i> 954</span> Sales in this month</small>
        		</div>
        	</div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
        	<div class="panel panel-info panel-colorful">
        		<div class="panel-body text-center">
        			<p class="text-uppercase mar-btm text-sm">Paid Invoices</p>
        			<i class="fa fa-shopping-cart fa-5x"></i>
        			<hr>
        			<p class="h2 text-thin">7,428</p>
        			<small><span class="text-semibold"><i class="fa fa-dollar fa-fw"></i> 22,675</span> Earning Today</small>
        		</div>
        	</div>
        </div>        
	</div>
</div>

@endsection
