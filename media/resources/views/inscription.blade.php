@extends('layouts.nav_bar')
@section('content')
<h1>Inscription</h1>  
  <form method="GET" action="/user/create" >
    {{ csrf_field() }}
    <div class="field">
        <label class="label" for="Name">Name :</label>
        <div class="control">
            <input type="text" class="input" name="name" >
        </div>
    </div>
    <div class="field">
            <label class="label" for="password">Password :</label>
            <div class="control">
            <input type="password" class="input" name="password">
            </div>
    </div>
    <div class="field">
            <label class="label" for="email">Email :</label>
            <div class="control">  
            <input type="text" class="input" name="email">
            </div>
    </div>
    <div class="field">
            <label class="label" for="adresse">adresse :</label>
            <div class="control">
            <input type="text" class="input" name="adresse" >
            </div>
    </div>
    <div class="field">
            <label class="label" for="city">City :</label>
            <div class="control">
            <input type="text" class="input" name="city">
            </div>
    </div>
    <div class="field">
            <label class="label" for="Code_postale">Code Postale :</label>
            <div class="control">
            <input type="number" class="input" name="Code_postale">
            </div>
    </div>
    <div class="field">
            <label class="label" for="Sub_id">Subscription type : </label>
            <div class="control">
            <input type="radio" name="Sub_1" value="Sub_1" >sub1<br> 
            <input type="radio" name="Sub_1" value="Sub_1" >sub1<br> 
            

            </div>
    </div>
    <input class="button" type="submit" value="Submit">
  </form>
            
            
        
@endsection