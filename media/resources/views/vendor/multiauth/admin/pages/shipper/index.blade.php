@extends('vendor.multiauth.layouts.dash')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                
                        <div class="card-header">
                            <strong class="card-title">Table Head</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">company name</th>
                                        <th scope="col">Adress</th>
                                        
                                    </tr>
                                </thead>
                                @foreach ($shipper as $item)
                                <tbody>
                                    <tr>
                                        <th scope="row">{{$item->id}}</th>
                                        <td>{{$item->C_name}}</td>
                                        <td>{{$item->adresse}}</td>
                                       
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