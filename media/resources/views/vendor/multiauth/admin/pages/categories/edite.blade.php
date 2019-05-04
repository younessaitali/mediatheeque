@extends('vendor.multiauth.layouts.dash')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                
                <div class="card-header">
                    <strong class="card-title">Categories</strong>
                </div>
                <div class="card-body">
                        <form method="POST" action="{{ route('admin.categorie.update',[$categorie->id]) }}"> 
                                @csrf
                                @method('PATCH')
                <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right" >Name</label>

                        <div class="col-md-8">
                            <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{$categorie->name}}"
                                required autofocus>
                        </div>
                    </div>

                <div class="row form-group">
                    <div class="col col-md-2">
                        <label for="selectSm" class=" form-control-label">Select Categorie</label>
                    </div>
                    <div class="col-12 col-md-6">

                        <select name="pcategorie" id="SelectLm" class="form-control-sm form-control">
                            <option value="0" selected>Root</option>
                            <option value="1">Movies</option>
                            <option value="2">Books</option>
                            <option value="3">Journals</option>
                            <option value="4">Magazins</option>
                            
                        </select>
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