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

		        
		        <!-- Modal body -->
                <br><br><br>
		        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    @include('flash-message')
                    <div class="card">
		          	<form action="/customers/update/<?php echo$data['customer'][0]->id; ?>" method="POST">
                        @csrf
                                <div class="form-group">
                                    <label for="nom_complete">Nom complét : <span style="color:red;">required (*)</span></label>
                                    <input type="text" name="nom_complete" class="form-control" id="nom_complete" value="<?php echo$data['customer'][0]->nom_complete; ?>">
                                    @if ($errors->has('nom_complete'))
                                    <span style="color: red;">{{ $errors->first('nom_complete') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="currency">Gender :</label>
                                    <select class="form-control" name="gender">
                                        <option selected value=""><?php echo$data['customer'][0]->gender; ?></option>
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
                                    <input type="email" name="email" class="form-control" id="email" value="<?php echo$data['customer'][0]->email; ?>">
                                    @if ($errors->has('email'))
                                    <span style="color: red;">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="tele">N°télèphone :</label>
                                    <input type="text" name="tele" class="form-control" id="tele"value="<?php echo$data['customer'][0]->tele; ?>">
                                    @if ($errors->has('tele'))
                                    <span style="color: red;">{{ $errors->first('tele') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">N°compte :</label>
                                    <input type="text" name="account_number" class="form-control" id="account_number" value="<?php echo$data['customer'][0]->account_number; ?>">
                                    @if ($errors->has('account_number'))
                                    <span style="color: red;">{{ $errors->first('account_number') }}</span>
                                    @endif
                                </div>
                                <center>
                                <hr>ADDRESSE INFORMATIONS :<hr>
                                </center>
                                <div class="form-group">
                                    <label for="country">Pays :</label>
                                    <input type="text" name="country" class="form-control" id="country" value="<?php echo$data['customer'][0]->country; ?>">
                                    @if ($errors->has('country'))
                                    <span style="color: red;">{{ $errors->first('country') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">Ville :</label>
                                    <input type="text" name="city" class="form-control" id="city" value="<?php echo$data['customer'][0]->city; ?>">
                                    @if ($errors->has('city'))
                                    <span style="color: red;">{{ $errors->first('city') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">Code postal :</label>
                                    <input type="text" name="zipcode" class="form-control" id="zipcode" value="<?php echo$data['customer'][0]->zipcode; ?>">
                                    @if ($errors->has('zipcode'))
                                    <span style="color: red;">{{ $errors->first('zipcode') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">Region :</label>
                                    <input type="text" name="province" class="form-control" id="province" value="<?php echo$data['customer'][0]->province; ?>">
                                    @if ($errors->has('province'))
                                    <span style="color: red;">{{ $errors->first('province') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">Addresse 1 :</label>
                                    <input type="text" name="addr1" class="form-control" id="addr1" value="<?php echo$data['customer'][0]->addr1; ?>">
                                    @if ($errors->has('addr1'))
                                    <span style="color: red;">{{ $errors->first('addr1') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">Addresse 2 :</label>
                                    <input type="text" name="addr2" class="form-control" id="addr2" value="<?php echo$data['customer'][0]->addr2; ?>">
                                    @if ($errors->has('addr2'))
                                    <span style="color: red;">{{ $errors->first('addr2') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">Note :</label>
                                    <textarea class="form-control" name="note"><?php echo$data['customer'][0]->note; ?></textarea>
                                    @if ($errors->has('note'))
                                    <span style="color: red;">{{ $errors->first('note') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="currency">Devis :</label>
                                    <select class="form-control" name="currency">
                                        <option selected ><?php echo$data['customer'][0]->currency; ?></option>
                                    	<option>DOLLAR ($)</option>
                                        <option>EURO (€)</option>
                                        <option>CHF (£)</option>
                                    </select>
                                    @if ($errors->has('currency'))
                                    <span style="color: red;">{{ $errors->first('currency') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-warning btn-sm btn-block" type="submit"><i class="fas fa-save"></i> Enregistré</button>
                                    <a href="/customers/del/<?php echo$data['customer'][0]->id; ?>" class="btn btn-danger btn-sm btn-block" onclick="return confirm('Are you sur wanna delete this supplier')"><i class="fas fa-trash"></i> Supprimé le client</a>

                                </div>
                            </form>
                            </div>
        		        </div>
        		      </div>

	

@endsection
