@extends('vendor.multiauth.layouts.dash')
@section('content')
    <div class="row justify-content-center">
      

        
        <div class="content mt-4">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>title</th>
                                            <th>Category</th>
                                            <th>price</th>
                                            <th>Promo price</th>
                                            <th>quantity</th>
                                            <th>disponibility</th>
                                            <th>Remove</th>
                                            <th>Edite</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($product as $item)
                                        <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->title}}</td>
                                                <td>{{$item->description}}</td>
                                                <td>{{$item->price}}</td>
                                                <td>{{$item->promo_price}}</td>
                                                <td>{{$item->quantity}}</td>
                                                @if ($item->disp)
                                                <td><button type="button" class="btn btn-success m-l-10 m-b-10">True <span class="badge badge-light"></span></button></td>

                                                @else
                                                <td><button type="button" class="btn btn-danger m-l-10 m-b-10">False <span class="badge badge-light"></span></button></td>

                                                @endif
                                                <td><a href="#" class="btn btn-sm btn-secondary mr-3" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id }}').submit(); ">Delete</a></td>
                                                <form id="delete-form-{{ $item->id }}" action="{{ route('admin.product.delet',[$item->id]) }}" method="POST" style="display: none;">
                                                        @csrf 
                                                        @method('delete')
                                                    </form>
                                                <td><a href="{{route('admin.product.edite',[$item->id])}}" class="btn btn-sm btn-primary mr-3">Edit</a></td>
                                            </tr>
                                            </tr>    
                                        @endforeach
                                        
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


  
                   
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra-js')
<script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{ asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{ asset('vendors/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{ asset('assets/js/init-scripts/data-table/datatables-init.js')}}"></script>

@endsection