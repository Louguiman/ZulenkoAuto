    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ZULENKO AUTO</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="styles/styles.css" type="text/css" rel="stylesheet" >
    <link href="styles/style.css" type="text/css" rel="stylesheet" >
    
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>

    <body >
    
    <nav class="navbar fixed-top navbar-expand-md " id="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Zulenko Auto</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item active"> <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" href="customer_register.html">Register</a> </li>
                    <li class="nav-item "> <a class="nav-link " href="checkout.html"> My Account </a></li>
                    <li class="nav-item "> <a class="nav-link " href="cart.html">Go To Cart </a></li>
                    <li class="nav-item"> <a class="nav-link " href="#">Login</a></li>
                  </ul>
                  <a href="cart.html" class="btn btn-primary right">
                  <i class="fa fa-shopping-cart">
                    <span>4 Items in Your Cart</span></i>
                  </a> 
                    
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <div class="image">
        <h1 class="heading">Main Heading</h1>
        <p><button class="btn btn-large">Big Button</button></p>
    </div>
    
    
    

    <!--     <nav class="navbar q " id="navbar"> <a class="navbar-brand" id="logo" href="#"></a>
          <button class="navbar-toggler" type="button" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent2">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active"> <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a> </li>
              <li class="nav-item"> <a class="nav-link" href="customer_register.html">Register</a> </li>
              <li class="nav-item "> <a class="nav-link " href="checkout.html"> My Account </a></li>
              <li class="nav-item "> <a class="nav-link " href="cart.html">Go To Cart </a></li>
              <li class="nav-item"> <a class="nav-link " href="#">Login</a></li>
            </ul>
            <a href="cart.html" class="btn navbar-btn btn-primary right">
            <i class="fa fa-shopping-cart">
              <span>4 Items in Your Cart</span></i>
            </a>    

          </div>
        </nav> -->

    <div id="Top"> <!--   Top begins -->
       <!--  <div class="rounded img-fluid col-md-12">  <img src="images/banner1.png" alt="banner" width="1920" class="rounded img-fluid" pt-2 pb-1 > </div>-->

        <nav class="navbar navbar-default navbar-expand-md navbar-light bg-light pt-2" id="navbar2"> <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent1">
            <ul class="navbar-nav ">
              <li class="nav-item mr-1 active">
                  <a id="nav-link" href="#">Acceuil<span class="sr-only">(current)</span></a></li>
              <li class="nav-item mr-1"> <a id="nav-link" href="pages/shop.php">Shop</a></li>
              <li class="nav-item mr-1 dropdown"><a class="nav-link dropdown-toggle" href="#" id="nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Categories </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                   <a class="dropdown-item" href="#">Action</a> 
                   <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a> </div>
              </li>
              <li class="nav-item"> <a id="nav-link" href="#">Contact US</a></li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="get" action="results.html ">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="user_query" required>
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="search" value="search"><em class="fa fa-search"></em></button>
            </form>
          </div>
        </nav>
    </div><!-- Top finishes -->
     
    <div id="slider" class="carousel slide" data-ride="carousel"> 
      
      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#slider" data-slide-to="0" class="active"></li>
        <li data-target="#slider" data-slide-to="1"></li>
        <li data-target="#slider" data-slide-to="2"></li>
        <li data-target="#slider" data-slide-to="3"></li>
        <li data-target="#slider" data-slide-to="4"></li>
      </ul>
      
      <!-- The slideshow -->
      <div class="carousel-inner">
       <!--    <?php /*
            require_once('includes/db.php');
            $result = $conn->prepare("SELECT * FROM 'slider' LIMIT 0,1");
            $result->execute();
            for($i=0; $slider= $result->fetch(); $i++){
        ?>
        <div class='item active'><img src=<?echo $slider['slider_image'];?>></div>";
        
        <?php
            }
            $result = $conn->prepare("SELECT * FROM 'slider' LIMIT 1,5");
            $result->execute();
            for($i=0; $slider= $result->fetch(); $i++){
        ?>

        <div class='item '><img src=<?echo $slider['slider_image'];?>></div>";

        <?php 
            }*/
        ?>  -->
      
      </div>
      
      <!-- Left and right controls --> 
      <a class="carousel-control-prev" href="#slider" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a>
      <a class="carousel-control-next" href="#slider" data-slide="next"> <span class="carousel-control-next-icon"></span> </a>
      
    </div>
        
    <!-- JUMBOTRONS -->    
    <div class="jumbotron" id="jumbotron">
        
      <h1>Explorer les Categories Populaires </h1>
      <div class="row">
          
        <div class="col-sm ">
          <p>Lorem ipsum...</p>
        </div>
        <div class="col-sm ">
          <p>Sed ut perspiciatis...</p>
        </div>
        <div class="col-sm ">
          <p>Lorem ipsum...</p>
        </div>
        <div class="col-sm ">
          <p>Sed ut perspiciatis...</p>
        </div>
        <div class="col-sm">
          <p>Lorem ipsum...</p>
        </div>
        <div class="col-sm">
          <p>Sed ut perspiciatis...</p>
        </div>
        <div class="col-sm">
          <p>Lorem ipsum...</p>
        </div>
        <div class="col-sm">
          <p>Sed ut perspiciatis...</p>
        </div>  
      </div>
    </div>  
    
    <div class="jumbotron" id="jumbotron">
        
      <h1>Nouveaux </h1>
      <div class="d-flex flex-row bd-highlight mb-3">
            <div class="card p-2 bd-highlight" style="width: 18rem;">
                    <img class="card-img-top" src="https://i.imgur.com/FwAGMuOm.jpg" alt="">
                    <div class="card-body"><h5>
                                <a href="details.php">
                                    Hyundai Tucson 4x4
                                </a>
                            </h5>
                            <p class="year"> 2017 </p>
                            <p class="price">4 600 000 F CFA</p>
                            <p class="button">
                                <a href="details.php" class="btn btn-default"> Détails
                                </a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart">Ajouter au Panier
                                    </i>
                                </a>
                            </p>
                    </div>
                </div>
                <div class="card p-2 bd-highlight" style="width: 18rem;">
                    <img class="card-img-top" src="https://i.imgur.com/ZhInANSm.jpg" alt="">
                    <div class="card-body"><h5>
                                <a href="details.php">
                                    Toyota Corolla
                                </a>
                            </h5>
                            <p class="year"> 2020 </p>
                            <p class="price">5 500 000 F CFA</p>
                            <p class="button">
                                <a href="details.php" class="btn btn-default"> Détails
                                </a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart">Ajouter au Panier
                                    </i>
                                </a>
                            </p>
                    </div>
                </div>
                <div class="card p-2 bd-highlight" style="width: 18rem;">
                    <img class="card-img-top" src="https://i.imgur.com/wANnnDYm.jpg" alt="">
                    <div class="card-body"><h5>
                                <a href="details.php">
                                    Toyota Tacoma 4x4
                                </a>
                            </h5>
                            <p class="year"> 2017 </p>
                            <p class="price">8 000 000 F CFA</p>
                            <p class="button">
                                <a href="details.php" class="btn btn-default"> Détails
                                </a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart">Ajouter au Panier
                                    </i>
                                </a>
                            </p>
                    </div>
                </div>
                <div class="card p-2 bd-highlight" style="width: 18rem;">
                    <img class="card-img-top" src="https://i.imgur.com/HYgjGZFm.jpg" alt="">
                    <div class="card-body"><h5>
                                <a href="details.php">
                                    BMW 640i
                                </a>
                            </h5>
                            <p class="year"> 2016 </p>
                            <p class="price">6 750 000 F CFA</p>
                            <p class="button">
                                <a href="details.php" class="btn btn-default"> Détails
                                </a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart">Ajouter au Panier
                                    </i>
                                </a>
                            </p>
                    </div>
                </div>
                <div class="card p-2 bd-highlight" style="width: 18rem;">
                    <img class="card-img-top" src="https://i.imgur.com/8hmoI7Cm.jpg" alt="">
                    <div class="card-body"><h5>
                                <a href="details.php">
                                    BMW 645i
                                </a>
                            </h5>
                            <p class="year"> 2018 </p>
                            <p class="price">9 250 000 F CFA</p>
                            <p class="button">
                                <a href="details.php" class="btn btn-default"> Détails
                                </a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart">Ajouter au Panier
                                    </i>
                                </a>
                            </p>
                    </div>
                </div>
            </div>
            <div class="line"></div>
    
    <div class="jumbotron" id="jumbotron">
        
      <h1>Pourquoi Zulenko ? </h1>
      <div class="row">
          
        <div class="col-sm ">
          <p>Lorem ipsum...</p>
        </div>
        <div class="col-sm ">
          <p>Sed ut perspiciatis...</p>
        </div>
        <div class="col-sm ">
          <p>Lorem ipsum...</p>
        </div>
        <div class="col-sm ">
          <p>Sed ut perspiciatis...</p>
        </div>
        <div class="col-sm">
          <p>Lorem ipsum...</p>
        </div>
         
         
      </div>
    </div>
    
    <?php

      include("includes/footer.php");

      ?>

        
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>        
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            document.getElementById("navbar").style.padding = "5px 10px";
            document.getElementById("logo").style.fontSize = "11px";
            $('.navbar').addClass('solid');
          } 
          else {
            document.getElementById("navbar").style.padding = "80px 10px";
            document.getElementById("logo").style.fontSize = "35px";
            $('.navbar').removeClass('solid');
          }
        } 
        
    
        $(document).ready(function() {
        // Transition effect for navbar 
        $(window).scroll(function() {
          // checks if window is scrolled more than 570px, adds/removes solid class
          if($(this).scrollTop() > 570) { 
              $('.navbar').addClass('solid');
              
              
          } 
          if($(this).scrollTop() > 540) {
            $('#Top .navbar').addClass('fixed');
          }
          else {
              $('.navbar').removeClass('solid');
              $('#Top .navbar').removeClass('fixed');
          }
        });});
     
</script>
  </body>
  </html>