@extends('vendor.multiauth.layouts.dash')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                
                <div class="card-header">
                    <strong class="card-title">Shippers</strong>s
                </div>
                <div class="card-body">
                        <form method="POST" action="{{ route('admin.shipper.update',[$shipper->id]) }}"> 
                                @csrf
                                @method('PATCH')
                <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right" >Phone</label>

                        <div class="col-md-8">
                            <input id="name" type="text" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{$shipper->phone}}"
                                required autofocus>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right" >Company Name</label>
        
                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control {{ $errors->has('c_name') ? ' is-invalid' : '' }}" name="c_name" value="{{$shipper->C_name}}"
                                        required autofocus>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right" >Adress</label>
                
                                        <div class="col-md-8">
                                            <input id="name" type="text" class="form-control {{ $errors->has('adress') ? ' is-invalid' : '' }}" name="adress" value="{{$shipper->adresse}}"
                                                required autofocus>
                                        </div>
                                    </div>

                         
            
                <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary btn-sm">
                            Submit
                        </button>
                </div>
                        </form>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection