<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Zulenko Auto Shop</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../styles/style2.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>
        

    <div class="wrapper">
      

        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Catégories</h3>
            </div>

            <ul class="list-unstyled components">
                 
                <!-- En cas de besoin 
                                <p>Dummy Heading</p>
                                <li class="active">
                                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                                    <ul class="collapse list-unstyled" id="homeSubmenu">
                                        <li>
                                            <a href="#">Home 1</a>
                                        </li>
                                        <li>
                                            <a href="#">Home 2</a>
                                        </li>
                                        <li>
                                            <a href="#">Home 3</a>
                                        </li>
                                    </ul>
                                </li>
                -->                 
                <li>
                    <a href="#">Citadines</a>
                </li>
                <li>
                    <a href="#">Familiales</a>
                </li>
                <li>
                    <a href="#">Cabriolets</a>
                </li>
                <li>
                    <a href="#">Breaks et Ludospace</a>
                </li>
                <li>
                    <a href="#">SUV-CrossOver-4x4</a>
                </li>
                <li>
                    <a href="#">Sport</a>
                </li>
                <li>
                    <a href="#">Van et MiniVan</a>
                </li>
                <li>
                    <a href="#">Bus et MiniBus</a>
                </li>
                <li>
                    <a href="#">Camion</a>
                </li>
            </ul>

            
            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <div class="container-fluid">
                <div class="rounded img-fluid col-md-12">  
                <img src="../images/banner1.png" alt="banner" width="1920" class="rounded img-fluid" pt-2 pb-1 > 
                </div>
            </div>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Catégories</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="../index.php">Acceuil</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Shop <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Mon Compte</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Mon Panier</a>
                            </li>
                        </ul>
                        <a href="cart.html" class="btn navbar-btn btn-primary right">
                            <i class="fa fa-shopping-cart">
                                <span>4 Items in Your Cart</span></i>
                        </a>  
                    </div>
                </div>
            </nav>
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="../index.php"><i class="fa fa-home" aria-hidden="true"></i> Home  </a></li>
                    <li> Shop</li>
                </ul>
            </div>

            <h2>Par Marque</h2>
            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="card p-2 bd-highlight" style="width: 18rem;">
                    <img class="card-img-top" src="https://i.imgur.com/wANnnDYm.jpg" alt="">
                    <div class="card-body"><h5>
                                <a href="details.php">
                                    Ford Fusion
                                </a>
                            </h5>
                            <p class="year"> 2018 </p>
                            <p class="price">4 000 000 F CFA</p>
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
                                    Ford Fusion
                                </a>
                            </h5>
                            <p class="year"> 2018 </p>
                            <p class="price">4 000 000 F CFA</p>
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
                                    Ford Fusion
                                </a>
                            </h5>
                            <p class="year"> 2018 </p>
                            <p class="price">4 000 000 F CFA</p>
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
                                    Ford Fusion
                                </a>
                            </h5>
                            <p class="year"> 2018 </p>
                            <p class="price">4 000 000 F CFA</p>
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
                                    Ford Fusion
                                </a>
                            </h5>
                            <p class="year"> 2018 </p>
                            <p class="price">4 000 000 F CFA</p>
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

            <h2>Nouveaux Arrivages</h2>
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

            <h2>Populaire En Ce Moment</h2>
            <div class="d-flex flex-row bd-highlight mb-3">
                
            <div class="card p-2 bd-highlight" style="width: 18rem;">
                    <img class="card-img-top" src="https://i.imgur.com/QkMSvCbm.jpg" alt="">
                    <div class="card-body"><h5>
                                <a href="details.php">
                                    BMW 530i
                                </a>
                            </h5>
                            <p class="year"> 2019 </p>
                            <p class="price">9 800 000 F CFA</p>
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
                    <img class="card-img-top" src="https://i.imgur.com/J6JR5Clm.jpg" alt="">
                    <div class="card-body"><h5>
                                <a href="details.php">
                                    BMW 114i
                                </a>
                            </h5>
                            <p class="year"> 2014 </p>
                            <p class="price">3 500 000 F CFA</p>
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
                    <img class="card-img-top" src="https://i.imgur.com/hqCJuzSm.jpg" alt="">
                    <div class="card-body"><h5>
                                <a href="details.php">
                                    VOLKSWAGEN JETTA
                                </a>
                            </h5>
                            <p class="year"> 2019 </p>
                            <p class="price">4 500 000 F CFA</p>
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
                                    Ford Fusion
                                </a>
                            </h5>
                            <p class="year"> 2018 </p>
                            <p class="price">4 000 000 F CFA</p>
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

            <h3>Recommandation</h3>
            <div class="d-flex flex-row bd-highlight mb-3 " overflow="scroll">
            <div class="card p-2 bd-highlight" style="width: 18rem;">
                    <img class="card-img-top" src="https://i.imgur.com/wANnnDYm.jpg" alt="">
                    <div class="card-body"><h5>
                                <a href="details.php">
                                    Ford Fusion
                                </a>
                            </h5>
                            <p class="year"> 2018 </p>
                            <p class="price">4 000 000 F CFA</p>
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
                                    Ford Fusion
                                </a>
                            </h5>
                            <p class="year"> 2018 </p>
                            <p class="price">4 000 000 F CFA</p>
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
                                    Ford Fusion
                                </a>
                            </h5>
                            <p class="year"> 2018 </p>
                            <p class="price">4 000 000 F CFA</p>
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
                                    Ford Fusion
                                </a>
                            </h5>
                            <p class="year"> 2018 </p>
                            <p class="price">4 000 000 F CFA</p>
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
                                    Ford Fusion
                                </a>
                            </h5>
                            <p class="year"> 2018 </p>
                            <p class="price">4 000 000 F CFA</p>
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
        </div>
    </div>
    <?php
        include("includes/footer.php")
    ?>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>