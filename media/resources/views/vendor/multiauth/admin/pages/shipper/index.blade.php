@extends('vendor.multiauth.layouts.dash')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                
                        <div class="card-header">
                            <strong class="card-title">Shippers</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">company name</th>
                                        <th scope="col">Adress</th>
                                        <th scope="col">Delete</th>
                                        <th scope="col">Edite</th>
                                        
                                    </tr>
                                </thead>
                                @foreach ($shipper as $item)
                                <tbody>
                                    <tr>
                                        <th scope="row">{{$item->id}}</th>
                                        <td>{{$item->phone}}</td>
                                        <td>{{$item->C_name}}</td>
                                        <td>{{$item->adresse}}</td>
                                       
                                        <td><a href="#" class="btn btn-sm btn-secondary mr-3" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id }}').submit(); ">Delete</a></td>
                                                <form id="delete-form-{{ $item->id }}" action="{{ route('admin.shipper.delet',[$item->id]) }}" method="POST" style="display: none;">
                                                        @csrf 
                                                        @method('delete')
                                                    </form>
                                                <td><a href="{{route('admin.shipper.edite',[$item->id])}}" class="btn btn-sm btn-primary mr-3">Edit</a></td>

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