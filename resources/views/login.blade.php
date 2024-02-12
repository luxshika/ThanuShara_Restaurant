<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>

  <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" >
  <link rel="stylesheet" href = " {{ asset('css/style1.css') }}">
</head>
<body>
<p class="title-m"><a href = "/cofeshop">ThanShara<a></p>
<div class="container">
@if($errors->any())
   
   <ul class = "list-unstyled">
       {!! implode('',$errors->all('<li class = "text-danger list-unstyled alert alert-danger">:message</li>')) !!}
 
   </ul>
 
   @endif
  
    <form action="authenticate" method = "POST">
    <h1 class = "text-success">LogIn Form</h1>
      <div class="form-group mt-5">
        <input type="text" name = "email" placeholder = "Email" class = "form-control"  autocomplete="off">
      </div>
      
      <div class="form-group">
        <input type="password" name = "password" placeholder = "Password"  class = "form-control"  autocomplete="off">
      </div>
     
      <div class="form-btn">
        <input type="submit" value = "LogIn" name = "submit" class = "btn btn-success">
      </div>

      <div>
       
     <p class = "text-danger mt-3 description">If you not Register Click Register button</p>
      </div>
      <button  class = "btn btn-success" ><a href = "/register" >Register</a></button>
      @csrf
    </form>
  </div>
 
 
</body>
</html>