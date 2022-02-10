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
		        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    @include('flash-message')
                    <div class="card">
		          	<form action="/suppliers/update/<?php echo$data['supplier'][0]->id; ?>" method="POST">
                        @csrf
                                <div class="form-group">
                                    <label for="vendor_name">Vendor name : <span style="color:red;">required (*)</span></label>
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
                                    <label for="fname">Full name :</label>
                                    <input type="text" name="fname" class="form-control" id="fname"value="<?php echo$data['supplier'][0]->fname; ?>">
                                    @if ($errors->has('fname'))
                                    <span style="color: red;">{{ $errors->first('fname') }}</span>
                                    @endif
                                </div>
                                <center>
                                <hr>ADDITIONAL INFORMATIONS :<hr>
                                </center>
                                <div class="form-group">
                                    <label for="nom_complete">Country :</label>
                                    <input type="text" name="country" class="form-control" id="country"value="<?php echo$data['supplier'][0]->country; ?>">
                                    @if ($errors->has('country'))
                                    <span style="color: red;">{{ $errors->first('country') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">City :</label>
                                    <input type="text" name="city" class="form-control" id="city"value="<?php echo$data['supplier'][0]->city; ?>">
                                    @if ($errors->has('city'))
                                    <span style="color: red;">{{ $errors->first('city') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">Zip code :</label>
                                    <input type="text" name="zipcode" class="form-control" id="zipcode"value="<?php echo$data['supplier'][0]->zipcode; ?>">
                                    @if ($errors->has('zipcode'))
                                    <span style="color: red;">{{ $errors->first('zipcode') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nom_complete">Province :</label>
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
                                    <label for="currency">Currency :</label>
                                    <select class="form-control" name="currency">
                                        <option selected ><?php echo$data['supplier'][0]->currency; ?></option>
                                        <option>DOLLAR (USD)</option>
                                        <option>EURO (EUR)</option>
                                    </select>
                                    @if ($errors->has('currency'))
                                    <span style="color: red;">{{ $errors->first('currency') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-warning btn-sm btn-block" type="submit"><i class="fas fa-save"></i> Save</button>
                                    <a href="/suppliers/del/<?php echo$data['supplier'][0]->id; ?>" class="btn btn-danger btn-sm btn-block" onclick="return confirm('Are you sur wanna delete this supplier')"><i class="fas fa-trash"></i> Delete this supplier</a>

                                    
                                </div>
                                </form>
                            </div>
        		        </div>
        		      </div>

	

@endsection
