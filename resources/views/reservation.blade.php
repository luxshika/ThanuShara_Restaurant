<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>reservation</title>
 
  <link rel="stylesheet" href = " {{ asset('css/style3.css') }}">
  <link  rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href = " {{ asset('css/style.css') }}">

 
</head>
<body>

  <div class = "navbar">
    <div class = "logo">
    <p class="title-m cofeshop" style="font-size: 30px"><a href = "/">ThanSharah<a></p>
    </div>
    <div class="login-div">
      <button class = "logout-button">
      <a href = "logout" class="logout">Logout</a>
      </button>
    </div>  
  </div>
<br><br>
<div class = "display">
 <div class="heading"><h2>Hello {{ auth()->user()->name}} ! <br> Welcome to Our Restaurant let's Book</h2>
<p class="description">Join With Us<p></div> 

</div>
<div class = "container">
  <nav class="navbar navbar-expand ">
    <div class="container-fluid">
      <p class="navbar-brand text-dark" style="font-size: 30px;font-weight:bold"> Reservation Opening Time</p>
      
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav  my-4 ">
          <li class="nav-item mx-5 ">
            <p class=" active " style="font-size: 20px">6 a.m to 12p.m</p>
          </li>
          <li class="nav-item mx-5" style="font-size: 20px">
            <p >2 p.m to 7p.m </a>
          </li>
          <li class="nav-item mx-5" style="font-size: 20px">
            <p >8 p.m to 2 a.m </a>
          </li>
          
        </ul>
       
      </div>
    </div>
  </nav>
</div>  
 <div class = "container">
  @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
 
  <form action="{{ route('reservation.store1') }}" method="POST">
  
  
  <h1 class = "text-success">Table Reservation</h1>
  <div class="form-group mt-5">
    <input type="text" name = "name" placeholder = "Your Name" class = "form-control"  autocomplete="off">
  </div>
  
  <div class="form-group">
    <input type="text" name = "phone_number" placeholder = "Phone Number"  class = "form-control" autocomplete="off">
  </div>
  <div class="form-group">
    <input type="number" name = "number_of_guests" placeholder = "number of Guests"  class="form-control" autocomplete="off">
  </div>
  <div class="form-group">
    <input type="date" name = "date" placeholder = "dd/mm/yyyy"  class="form-control" autocomplete="off">
  </div>
  <div class="form-group">
    <input type="time" name = "time" placeholder = "Time"  class="form-control" autocomplete="off">
  </div>

  <div class="form-btn">
    <button type="submit" value = "Make a Reservation" name = "submit" class = "btn btn-success" style="color: black;background-color:gray">Make a Reservation</button>
  </div>
  @csrf
</form>


</div> 
<h2 style="margin:0px 100px;color:green" class = "my-5">Some Picture For You </h2>
<div class="disply4" style="margin:0px 100px">

<img src="./images/table1.jpg" alt="" class = "card">
<img src="./images/table2.jpg" alt=""  class = "card">
<img src="./images/table3.jpeg" alt="" class = "card">


</div>
<div class="disply4" style="margin:0px 100px">
<img src="./images/happy-couple.jpg" alt="" class = "card">
<img src="./images/Birthday-Celebration.jpg" alt="" class = "card">
<img src="./images/table7.jpg" alt="" class = "card">
</div>
<!-- footer -->
<footer class = "my-5">
  <div class="container">
    <div class="column">
        <p class="title-m">ThanShara</p>
        <div class="column-info">
            <p>We provide you with the best of all</p>
            <p>varieties of cafe</p>
        </div>
    </div>
    <div class="column">
        <p class="title-m">Contact-us</p>
        <div class="column-info">
            <p>075-1234567 | 077-1234567</p>
            <p>info@company.com</p>
            <p>LINE: eatery247</p>
        </div>
    </div>
    <div class="column">
        <p class="title-m">Find Us</p>
        <div class="column-info">
          <p>no ,123 ramanathan road</p>
          <p>metra street</p>
          <p>colombo</p>
        </div>
    </div>
    
        </div>
    </div>
  </div>
</footer>
</body>
</html>




