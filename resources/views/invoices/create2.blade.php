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
                    <br><br><br>
                    <h1>Etape 1 : Préparation du facture</h1>
                        <div class="card">
                            <div class="container">
                                <br><center>@include('flash-message')</center>
                                  <form action="/invoices/store/" method="POST">
                                    @csrf
                           
                                <div class="form-group">
                                    <label for="customer_id">Client :</label>
                                    <select class="form-control" name="customer_id" id="customer_id">
                                        @foreach ($data['customers'] as $customer)
                                        <option value="{{ $customer->id }}">{{ $customer->nom_complete }}</option>
                                        
                                        @endforeach
                                    </select>
                                    @if ($errors->has('customer_id'))
                                    <span style="color: red;">{{ $errors->first('customer_id') }}</span>
                                    @endif
                                  
                                </div>
                        
                                <div class="form-group">
                                    <label for="supplier_id">Fournisseur :</label>
                                    <select class="form-control" name="supplier_id" id="supplier_id">
                                        @foreach ($data['suppliers'] as $supplier)
                                        <option value="{{ $supplier->id }}">{{ $supplier->vendor_name }}</option>
                                        @endforeach 
                                    </select>
                                    @if ($errors->has('supplier_id'))
                                    <span style="color: red;">{{ $errors->first('supplier_id') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="total_ht">Libèlle :</label>
                                    <input  type=text name="f_libelle" class="form-control" id="f_libelle" value="">
                                </div>

                                <div class="form-group">
                                    <label for="total_ht">Réference :</label>
                                    <input  type=text name="reference" class="form-control" id="reference" value="">
                                </div>

                                <div class="form-group">
                                    <label for="total_tva">Conditions du règlement :</label>
                                    <select class="form-control" id="condition" name="condition">
                                        <option value="----**----">----**----</option>
                                        <option value="Paiement à réception">Paiement à réception</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="total_tva">Status :</label>
                                    <select class="form-control" id="is_paid" name="is_paid">
                                        <option value="1" class="badge badge-success">Payé</label></option>
                                        <option value="0" class="badge badge-warning">NonPayé</label></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="total_ht">Facturé par :</label>
                                    <input readonly type=text step=any name="user_name" class="form-control" id="user_name" value="{{Auth::user()->name}}">
                                    <input readonly type=hidden step=any name="user_id" class="form-control" id="user_id" value="{{Auth::user()->id}}">
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-danger btn-sm btn-block" type="submit"><i class="fas fa-file-invoice"></i> Etape suivant</button>
                                </div>
                        </form>
                        </div>
                    </div>
                </div>
@endsection
