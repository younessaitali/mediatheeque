@extends('vendor.multiauth.layouts.dash')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                
                <div class="card-header">
                    <strong class="card-title">Penaltys</strong>s
                </div>
                <div class="card-body">
                        <form method="POST" action="{{ route('admin.penaltys.store') }}"> 
                                @csrf
                                

                        
                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right" >% penalty</label>
                
                                        <div class="col-md-8">
                                            <input id="name" type="number" class="form-control {{ $errors->has('penalty') ? ' is-invalid' : '' }}" name="penaltys" 
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