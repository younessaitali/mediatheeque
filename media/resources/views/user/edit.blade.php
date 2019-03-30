@extends('layouts.nav_bar')
@section('hero_container')
<h1>acount</h1>
<form method= "POST" action="/user/{{$user->id}}" >
    {{ method_field('Patch')}}
    {{ csrf_field() }}
    <div class="field">

        <label class="label" for="name">Name</label>
        <div class="control">
        <input type="text" class="input" name="name" value="{{$user->name}}">
        </div>
    </div> <!-- end field -->


    <div class="field">

        <label class="label" for="email">Email</label>
        <div class="control">
        <input type="text" class="input" name="email" value="{{$user->email}}">
        </div>
    </div><!-- end field -->
    
    <div class="field">

        <label class="label" for="adresse">ADRESS</label>
        <div class="control">
        <input type="text" class="input" name="adresse" value="{{$user->adresse}}">
        </div>
    </div><!-- end field -->
    
    <div class="field">

        <label class="label" for="city">City</label>
        <div class="control">
        <input type="text" class="input" name="city" value="{{$user->city}}">
        </div>
    </div><!-- end field -->

    <div class="field">

        <label class="label" for="c_c_n">Credit Card number</label>
        <div class="control">
        <input type="text" class="input" name="c_c_n" value="{{$users->c_c_n}}">
        </div>
    </div><!-- end field -->
</form>
@endsection