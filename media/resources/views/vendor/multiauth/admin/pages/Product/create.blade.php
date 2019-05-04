@extends('vendor.multiauth.layouts.dash')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                
                <div class="card-header">
                    <strong class="card-title">Add Product </strong>
                </div>
                <div class="card-body">
                        <form method="POST" action="{{ route('admin.product.store') }} " enctype="multipart/form-data"> 
                                @csrf
                                
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="title" placeholder="Text" class="form-control"><small class="form-text text-muted"></small></div>
                                    </div>


                                    <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                                            <div class="col-12 col-md-9"><textarea name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                                        </div>


                        
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label text-md-right" >Price</label>
                
                                        <div class="col-sm-3">
                                            <input id="name" type="number" class="form-control {{ $errors->has('penalty') ? ' is-invalid' : '' }}" name="price" 
                                                required autofocus>
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                            <label for="name" class="col-sm-3 col-form-label text-md-right" >Promo Price</label>
                            
                                                    <div class="col-sm-3">
                                                        <input id="name" type="number" class="form-control {{ $errors->has('penalty') ? ' is-invalid' : '' }}" name="promo_price" 
                                                            required autofocus>
                                                    </div>
                                                </div>
            


                                                <div class="row form-group">
                                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Categories</label></div>
                                                        <div class="col-12 col-md-9">
                                                            <select name="categories_id" id="select" class="form-control">
                                                                <option value="">Please select</option>
                                                                <option value="1">Movies</option>
                                                                <option value="2">Books</option>
                                                                <option value="2">Magazins</option>
                                                                <option value="2">Journal</option>
                                                            </select>
                                                        </div>
                                                    </div>




                                    <div class="row form-group">
                                            <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Images</label></div>
                                            <div class="col-12 col-md-9"><input type="file" id="file-multiple-input" name="photos[]" multiple="" class="form-control-file"></div>
                                        </div>



                                        <div class="row form-group">
                                                <div class="col col-md-3"><label for="select" class=" form-control-label">Option</label></div>
                                                <div class="col-12 col-md-9">
                                                    <select name="option_id" id="select" class="form-control">
                                                        <option value="">Please select</option>
                                                        <option value="1">Buy</option>
                                                        <option value="2">Rent</option>
                                                        <option value="3">Buy & Rent</option>
                                                    </select>
                                                </div>
                                            </div>



                                            <div class="form-group row">
                                                    <label for="name" class="col-sm-3 col-form-label text-md-right" >Quantity</label>
                                    
                                                            <div class="col-sm-3">
                                                                <input id="name" type="number" class="form-control {{ $errors->has('quantity') ? ' is-invalid' : '' }}" name="quantity" 
                                                                    required autofocus>
                                                            </div>
                                                        </div>

                                                        <div class="row form-group">
                                                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Tags</label></div>
                                                                <div class="col-12 col-md-9"><textarea name="tags" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
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
@endsection



@section('extra-js')
<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/popper.js/dist/umd/popper.min.js"></script>

<script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
@endsection