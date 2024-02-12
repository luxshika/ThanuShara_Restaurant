<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    <link href="{{ asset('hello.css') }}" rel="stylesheet" >
 
   


</head>
  <body>


    <div class="container">
    <h1 class = "text-success ">luxshika prashath</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, magnam et corrupti cum totam consequatur. Similique ab fugiat eveniet numquam, architecto nam quam accusamus, dolorem explicabo, nisi modi alias incidunt! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, cum harum? Voluptatum adipisci illum, corporis impedit molestiae ex odio aspernatur nostrum reiciendis sit natus porro veniam consequatur animi distinctio consectetur. </p>


    <h6>Total Number {{ 12+2 }} </h6>

    {{  " <h3 class = 'text-danger'> Prashath loves Jamuna </h3>" }}
   {!!  " <h3 class = 'text-danger'> Prashath loves Jamuna </h3>" !!}
   
    <img src ="Beautiful.jpg" alt = "" width = "500px" class = "card">

    
    <?php

    $msg = "hello laravel";
    print($msg);
    ?>

    @php
    $msg = "i am luxshika"; 
    @endphp
     

    @php 
        $age = 19;
   
    @endphp
    @if($age>18)
      <p>eligible </p>
    @else
       <p>Not eligible </p>
    @endif
  
    @php 
     $data = [];
    @endphp


    @if(count($data))
       <p>Data ia available</p>
    @else
       <p>Data is not available</p>
    @endif


    @php 
    $day = 'friday';

    @endphp

    @switch($day)
    @case('monday')
     <p> it is monday </p>
     @break
     @case('friday')
     <p> it is friday </p>
     @break

     @endswitch
    
       

    

    <p>{{ $msg }}</p>
    </div>
   <script src = "{{ asset('js/hello.js') }}"></script>


</body>
</html>