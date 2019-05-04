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
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">name</th>
                                        <th scope="col">Parent Categorie ID </th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Remove</th>
                                    </tr>
                                </thead>
                             @foreach ($catagorie as $item) 
                                    <tbody>
                                            <tr>
                                            <th scope="row">{{$item->id}}</th>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->p_id}}</td>
                                                <td><a href="#" class="btn btn-sm btn-secondary mr-3" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id }}').submit(); ">Delete</a></td>
                                                <form id="delete-form-{{ $item->id }}" action="{{ route('admin.categorie.delet',[$item->id]) }}" method="POST" style="display: none;">
                                                        @csrf 
                                                        @method('delete')
                                                    </form>
                                                <td><a href="{{route('admin.categorie.edite',[$item->id])}}" class="btn btn-sm btn-primary mr-3">Edit</a></td>
                                            </tr>
                                        
                                    </tbody>    
                             @endforeach 
                                    
                            </table>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection