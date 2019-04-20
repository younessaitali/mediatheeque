@extends('layouts.nav_bar')
@section('content') 
    <h1> user </h1>
    <section  class="User">
        <p>Edit your user settings:</p>
        @foreach ($user as $item)

        <p class="setting"><span class="spann"> Name<img src="img/user/edit.png" alt="*Edit*"></span>  {{ $item->name }}</p>
        
        <p class="setting"><span class="spann">E-mail<img src="img/user/edit.png" alt="*Edit*"></span>   {{ $item->email }}</p>
        
        <p class="setting"><span class="spann">Address<img src="img/user/edit.png" alt="*Edit*"></span>   {{ $item->Adresse }}</p>
        
        <p class="setting"><span class="spann">City<img src="img/user/edit.png" alt="*Edit*"></span>   {{ $item->City }}</p>
        
        <p class="setting"><span class="spann">Code Postale<img src="img/user/edit.png" alt="*Edit*"></span>   {{ $item->Code_postale }}</p>
      
        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
            @csrf
            <button type="submit">Logout</button>      
          </form>
        @endforeach
    </section>
@endsection