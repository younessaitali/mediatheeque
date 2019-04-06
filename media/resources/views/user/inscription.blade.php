@extends('layouts.nav_bar')
@section('content')

  <form method="Post" action="/user" >
    {{ csrf_field() }}
    <h1>Sign Up</h1>
    <fieldset>

        <legend><span class="number">1</span>Your basic info</legend>
        <label for="name">Name:</label>
        <input type="text" id="name" name="user_name">
        
        <label for="mail">Email:</label>
        <input type="email" id="mail" name="user_email">
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="user_password">

        <label for="adresse">Adresse:</label>
        <input type="adresse" id="adresse" name="user_adresse">

        <label for="city">City:</label>
        <input type="city" id="city" name="user_city">

        <label for="code_p">Code Postale:</label>
        <input type="code_p" id="code_p" name="user_code_p">
    </fieldset>
    <legend><span class="number">2</span>Subscription Field:</legend>
    <label for="sub_type">Subscription type:</label>
    <select id="sub_type" name="user_sub_type">
     
        <option value="1">Sub1</option>
        <option value="2">Sub2</option>
        <option value="3">Sub3</option>
    </select>

    <button type="submit">Sign Up</button>
</form> 
            
        
@endsection