@extends('layouts.nav_bar')
@section('content')
<h1> user </h1>
@foreach ($user as $item)
<li> {{ $item->name }}</li>
<li> {{ $item->email }}</li>
<li> {{ $item->Adresse }}</li>
<li> {{ $item->City }}</li>
<li> {{ $item->Code_postale }}</li>
    
@endforeach
@endsection