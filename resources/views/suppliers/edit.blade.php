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
		          	<form action="/suppliers/update/<?php echo$data['supplier'][0]->id; ?>" method="POST">
                        @csrf
                                <div class="form-group">
                                    <label for="vendor_name">Fournisseur : <span style="color:red;">required (*)</span></label>
                                    <input type="text" name="vendor_name" class="form-control" id="vendor_name"value="<?php echo$data['supplier'][0]->vendor_name; ?>">
                                    @if ($errors->has('vendor_name'))
                                    <span style="color: red;">{{ $errors->first('nom_complete') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="email">Email :</label>
                                    <input type="email" name="email" class="form-control" id="email"value="<?php echo$data['supplier'][0]->email; ?>">
                                    @if ($errors->has('email'))
                                    <span style="color: red;">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="tele">N°télèphone :</label>
                                    <input type="text" name="tele" class="form-control" id="tele"value="<?php echo$data['supplier'][0]->tele; ?>">
                                    @if ($errors->has('tele'))
                                    <span style="color: red;">{{ $errors->first('tele') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="fname">Nom complèt :</label>
                                    <input type="text" name="fname" class="form-control" id="fname"value="<?php echo$data['supplier'][0]->fname; ?>">
                                    @if ($errors->has('fname'))
                                    <span style="color: red;">{{ $errors->first('fname') }}</span>
                                    @endif
                                </div>

                                 <center>
                                <hr>SOCIETE INFORMATIONS :<hr>
                                </center>

                                <div class="form-group">
                                    <label for="nom_complete">Capital :</label>
                                    <input type="number" name="capital"  step="any" class="form-control" id="capital" value="<?php echo$data['supplier'][0]->capital; ?>">
                                    @if ($errors->has('capital'))
                                    <span style="color: red;">{{ $errors->first('capital') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">Logo :</label>
                                    <input type="text" name="logo" class="form-control" id="logo" value="<?php echo$data['supplier'][0]->logo; ?>">
                                    @if ($errors->has('logo'))
                                    <span style="color: red;">{{ $errors->first('logo') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">Bic :</label>
                                    <input type="text" name="bic" class="form-control" id="bic" value="<?php echo$data['supplier'][0]->bic; ?>">
                                    @if ($errors->has('bic'))
                                    <span style="color: red;">{{ $errors->first('bic') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">Bank :</label>
                                    <input type="text" name="bank" class="form-control" id="bank" value="<?php echo$data['supplier'][0]->bank; ?>">
                                    @if ($errors->has('bank'))
                                    <span style="color: red;">{{ $errors->first('bank') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">Rcs :</label>
                                    <input type="text" name="rcs" class="form-control" id="rcs" value="<?php echo$data['supplier'][0]->rcs; ?>">
                                    @if ($errors->has('rcs'))
                                    <span style="color: red;">{{ $errors->first('rcs') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">Naf :</label>
                                    <input type="text" name="c_naf" class="form-control" id="c_naf" value="<?php echo$data['supplier'][0]->c_naf; ?>">
                                    @if ($errors->has('c_naf'))
                                    <span style="color: red;">{{ $errors->first('c_naf') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">N°siret :</label>
                                    <input type="text" name="n_siret" class="form-control" id="n_siret" value="<?php echo$data['supplier'][0]->n_siret; ?>">
                                    @if ($errors->has('n_siret'))
                                    <span style="color: red;">{{ $errors->first('n_siret') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">N°immatriculation :</label>
                                    <input type="text" name="n_immatriculation" class="form-control" id="n_immatriculation"value="<?php echo$data['supplier'][0]->n_immatriculation; ?>">
                                    @if ($errors->has('n_immatriculation'))
                                    <span style="color: red;">{{ $errors->first('n_immatriculation') }}</span>
                                    @endif
                                </div>



                                <center>
                                <hr>AUTRE INFORMATIONS :<hr>
                                </center>
                                <div class="form-group">
                                    <label for="nom_complete">Pays :</label>
                                    <input type="text" name="country" class="form-control" id="country" value="<?php echo$data['supplier'][0]->country; ?>">
                                    @if ($errors->has('country'))
                                    <span style="color: red;">{{ $errors->first('country') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">Ville :</label>
                                    <input type="text" name="city" class="form-control" id="city"value="<?php echo$data['supplier'][0]->city; ?>">
                                    @if ($errors->has('city'))
                                    <span style="color: red;">{{ $errors->first('city') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">Code postal :</label>
                                    <input type="text" name="zipcode" class="form-control" id="zipcode"value="<?php echo$data['supplier'][0]->zipcode; ?>">
                                    @if ($errors->has('zipcode'))
                                    <span style="color: red;">{{ $errors->first('zipcode') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">Region :</label>
                                    <input type="text" name="province" class="form-control" id="province"value="<?php echo$data['supplier'][0]->province; ?>">
                                    @if ($errors->has('province'))
                                    <span style="color: red;">{{ $errors->first('province') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">Addresse 1 :</label>
                                    <input type="text" name="addr1" class="form-control" id="addr1"value="<?php echo$data['supplier'][0]->addr1; ?>">
                                    @if ($errors->has('addr1'))
                                    <span style="color: red;">{{ $errors->first('addr1') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">Addresse 2 :</label>
                                    <input type="text" name="addr2" class="form-control" id="addr2"value="<?php echo$data['supplier'][0]->addr2; ?>">
                                    @if ($errors->has('addr2'))
                                    <span style="color: red;">{{ $errors->first('addr2') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="currency">Devis :</label>
                                    <select class="form-control" name="currency">
                                        <option selected ><?php echo$data['supplier'][0]->currency; ?></option>
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
                                    <a href="/suppliers/del/<?php echo$data['supplier'][0]->id; ?>" class="btn btn-danger btn-sm btn-block" onclick="return confirm('Are you sur wanna delete this supplier')"><i class="fas fa-trash"></i> Supprimé le fournisseur</a>

                                    
                                </div>
                                </form>
                            </div>
        		        </div>
        		      </div>

	

@endsection
