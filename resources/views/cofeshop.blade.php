<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThanShara</title>
   
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/content.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- navbar -->
    <nav class="navbar">
        <div class="container">

            <div class="navbar-brand">
                <a href="#" class="link">ThanShara</a>
            </div>

           

            <div class="navbar-content" id="navbarContent">
                <ul class="navbar-collapse">
                    <li class="navbar-item">
                        <a class="navbar-link link" href="#">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a class="navbar-link link" href="#aboutUsSection">About</a>
                    </li>
                    <li class="navbar-item">
                        <a class="navbar-link link" href="#chefSection">Chef</a>
                    </li>
                    <li class="navbar-item">
                        <a class="navbar-link link" href="#menuSection">Menu</a>
                    </li>
                    <li class="navbar-item">
                        <a class="navbar-link link" href="#contactSection">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="navbar-button">
                <button class="btn-green" ><a href = "/login" >Reservation</a></button>
            </div>
            <div class="navbar-menu__icon" id="navbarMenuIcon">
                <i class="fas fa-bars"></i>
            </div>

        </div>
    </nav>
  
<!-- banner information  -->
<div class="banner-info">
    <div class="container">
        <p class="description">Your perfect breakfast</p>
        <p class="title-l">the best dinning quality can be here too!</p>
        <a href="#menuSection" class = "btn link">Discover menu</a>
    </div>
</div>

<!-- about us-->
 <section class="about-us__section" id="aboutUsSection">
      <div class="container">
        <div class="column">
            <p class="description">Read our story</p>

            <p class="title-m">We've Been Making The Delicious Foods Since 1999</p>
            <div class="text-wrapper">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam perferendis suscipit vitae est voluptas saepe neque voluptatibus, odio reprehenderit officiis, excepturi, rerum harum eligendi consequatur quae autem assumenda distinctio? Necessitatibus!</p>
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam possimus culpa nostrum saepe sint non reprehenderit debitis repellat! Nihil, veniam quis! Dolorum repudiandae iste accusamus maxime eius nisi, est quia. Please tell your friends about template. Thank you!</p>
            </div>
        </div>
      
       
<div class="column">
    <img src="./images/about-image.jpg" alt="image">
</div>
      </div>

 </section>

 <!-- chef section   -->
<section class="chef__section" id="chefSection">
    <div class="container">
        <div class="center-content">
            <p class="title-m">Meet our chefs</p>
            <p class="description">they are nice & friendly</p>
        </div>
        <div class="column">
            <div class="card">
                <div class="img-wrapper"><img src="./images/chef1.jpg" alt="chef1">
                </div>
                <div class="card-info">
                    <i class="fab fa-telegram"></i>
                    <p>Join us on telegram at</p>
                    <p class="telegram-link">@chef1.kl</p>
                </div>
                <p class="title-m">John cabbage</p>
                <p class="description">
                    kitchen manager
                </p>
            </div>
         
            <div class="card">
                <div class="img-wrapper"><img src="./images/chef2.jpg" alt="chef2">
                </div>
                <div class="card-info">
                    <i class="fab fa-telegram"></i>
                    <p>Join us on telegram at</p>
                    <p class="telegram-link">@chef2.kl</p>
                </div>
                <p class="title-m">Mary herry</p>
                <p class="description">
                    kitchen officer
                </p>
            </div>
            
    
        
            <div class="card">
                <div class="img-wrapper"><img src="./images/team-image1.jpg" alt="chef3`">
                </div>
                <div class="card-info">
                    <i class="fab fa-telegram"></i>
                    <p>Join us on telegram at</p>
                    <p class="telegram-link">@chef3.kl</p>
                </div>
                <p class="title-m">shara leoaya</p>
                <p class="description">
                    cake maker
                </p>
            </div>
            
       </div>
    </div>
</section>

<!-- menu -->
<section class="menu__section" id="menuSection">
    <div class="container">
        <div class="center-content">
            <p class="title-m">Our Menu</p>
            <p class="description">they are nice & Delicious</p>
        </div>

    <div class="column">
        <div class="menu-section__card">
            <img src="./images/food1.jpg" alt="menu1">
            <div class="card-info">
                <p>American Breakfast</p>
                <p>$11</p>
            </div>
        </div>
        <div class="menu-section__card">
            <img src="./images/food2.jpg" alt="menu2">
            <div class="card-info">
                <p>African Best</p>
                <p>$15</p>
            </div>
        </div>
        <div class="menu-section__card">
            <img src="./images/food3.jpg" alt="menu3">
            <div class="card-info">
                <p>Chinese Best</p>
                <p>$19</p>
            </div>
        </div>
        <div class="menu-section__card">
            <img src="./images/cake.jpg" alt="menu4">
            <div class="card-info">
                <p>Double choclate cake</p>
                <p>$18</p>
            </div>
        </div>
        <div class="menu-section__card">
            <img src="./images/Christmas-Coffee.jpg" alt="menu5">
            <div class="card-info">
                <p>Christmas Coffee</p>
                <p>$23</p>
            </div>
        </div>
    </div>  
    </div>
</section>


 <!-- contact -->
 <section class="contact__section" id="contactSection">
    <div class="container">
        <div class="center-content">
            <p class="title-m">Any Messages or feedBack </p>
        </div>

        <div class="column">

            <form action="/message" method = "POST">
                <div class="input-group">
                    <label for="name">Full name</label>
                    <input type="text" id="name" class="form-control" name = "name">
                </div>

                <div class="input-group">
                    <label for="email">Email address</label>
                    <input type="email" id="email" class="form-control" name = "email">
                </div>


                <div class="input-group">
                    <label for="message">Message</label>
                    <textarea cols="30" id="message" class="form-control" rows="7" name = "message"></textarea>
                </div>

                <button class="btn-green">Send Message</button>
                @csrf
            </form>


        </div>
        <div class="center-content">
            <p class="title-m">Thank you We hope your are the best customer </p>
        </div>

    </div>
</section>

<!-- footer -->
<footer>
      <div class="container">
        <div class="column">
            <p class="title-m">ThanShara</p>
            <div class="column-info">
                <p>We provide you with the best of all</p>
                <p>varieties of cafe</p>
            </div>
        </div>
        <div class="column">
            <p class="title-m">Reservation</p>
            <div class="column-info">
                <p>090-080-0650 | 090-070-0430</p>
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
        <div class="column">
            <p class="title-m">Links</p>
            <div class="column-info">
               
    
                <div class="navbar-menu__icon" id="navbarMenuIcon">
                    <i class="fas fa-bars"></i>
                </div>
    
                <div class="navbar-content" id="navbarContent">
                    <ul class="navbar-collapse">
                        <li class="navbar-item">
                            <a class="navbar-link link" href="#">Home</a>
                        </li>
                        <li class="navbar-item">
                            <a class="navbar-link link" href="#aboutUsSection">About</a>
                        </li>
                        <li class="navbar-item">
                            <a class="navbar-link link" href="#chefSection">Chef</a>
                        </li>
                        <li class="navbar-item">
                            <a class="navbar-link link" href="#menuSection">Menu</a>
                        </li>
                        <li class="navbar-item">
                            <a class="navbar-link link" href="#contactSection">Contact</a>
                        </li>
                    </ul>
                </div>
                </p>
            </div>
        </div>
      </div>
</footer>

<script src = "{{ asset('js/script.js') }}"></script>
</body>
</html>