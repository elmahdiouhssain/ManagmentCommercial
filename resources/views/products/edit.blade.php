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
		          	<form action="/products/update/<?php echo$data['products'][0]->id; ?>" method="POST">
                        @csrf
                               <div class="form-group">
                                    <label for="name">Product name : <span style="color:red;">required (*)</span></label>
                                    <input type="text" name="name" class="form-control" id="name"value="<?php echo$data['products'][0]->name; ?>">
                                    @if ($errors->has('name'))
                                    <span style="color: red;">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="details">Description :</label>
                                    <textarea class="form-control" name="details"><?php echo$data['products'][0]->details; ?></textarea>
                                    @if ($errors->has('details'))
                                    <span style="color: red;">{{ $errors->first('details') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="price">Price :</label>
                                    <input type="number" name="price" class="form-control" id="price"value="<?php echo$data['products'][0]->price; ?>">
                                    @if ($errors->has('price'))
                                    <span style="color: red;">{{ $errors->first('price') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="tax">Tax price :</label>
                                    <input type="text" name="tax" class="form-control" id="tax"value="<?php echo$data['products'][0]->tax; ?>">
                                    @if ($errors->has('tax'))
                                    <span style="color: red;">{{ $errors->first('tax') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <strong>Disponiblity (): </strong>
                                    <input type="checkbox" name="is_active" class="switch-input" value="{{$data['products'][0]->is_active}}" {{ $data['products'][0]->is_active == 1 ? 'checked' : null }}/>
                                   
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-warning btn-sm btn-block" type="submit"><i class="fas fa-save"></i> Save</button>
                                    <a href="/products/del/<?php echo$data['products'][0]->id; ?>" class="btn btn-danger btn-sm btn-block" onclick="return confirm('Are you sur wanna delete this product')"><i class="fas fa-trash"></i> Delete this product</a>

                                    
                                </div>
                                </form>
                            </div>
        		        </div>
        		      </div>

	

@endsection
