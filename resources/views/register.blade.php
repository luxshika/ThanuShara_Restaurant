<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>register</title>
 
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href = " {{ asset('css/style1.css') }}">
 
  <style>
    h1{
  font-family: Georgia, 'Times New Roman', Times, serif;
  color: blue;
  font-weight: 500;
}
</style>
</head>
<body>
<p class="title-m"><a href = "/cofeshop">ThanShara<a></p>
  <div class="container">
  @if($errors->any())
   
  <ul class = "list-unstyled">
      {!! implode('',$errors->all('<li class = "text-danger list-unstyled alert alert-danger">:message</li>')) !!}

  </ul>

  @endif
    <form action="/store" method = "POST">
      <h1 class = "text-success">Registration Form</h1>
      <div class="form-group mt-5">
        <input type="text" name = "name" placeholder = "Full Name" class = "form-control"  autocomplete="off">
      </div>
      <div class="form-group">
        <input type="email" name = "email" placeholder = "Email"  class = "form-control"  autocomplete="off">
      </div>
      <div class="form-group">
        <input type="password" name = "password" placeholder = "Password"  class = "form-control" autocomplete="off">
      </div>
      <div class="form-group">
        <input type="password" name = "password_confirmation" placeholder = "Repeat Password"  class="form-control" autocomplete="off">
      </div>
      <div class="form-btn">
        <input type="submit" value = "Register" name = "submit" class = "btn btn-success" >
      </div>
      @csrf
    </form>
  </div>
  
 
</body>
</html>