<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT PRODUCTS</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  

</head>
<body>

    <div class="row">
        <div class="Col-md-12">
            <ol class="breadcrumb">
                <li class="active"> 
                    <i class="fa fa-dashboard">
                        Dashboard  / Insert Product
                    </i>
                </li>
            </ol>
        </div>
    
    
    
    
    
    
    
    </div>
    <DV class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="fa fa-money fw"></i>Insert Product
                    </div>
                </div>

            </div>
            <div class="panel-body">
                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nom du Produit</label>
                        <div class="col-md-6">
                            <input name="product_title" type="text" class="form-control" required>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Catégories du produit</label>
                        <div class="col-md-6">
                            <select name="product_cat" class="form-control" >
                                <option >Choisissez une catégorie</option>
                                
                                <?php
                                    require_once('includes/db.php');
                                    $result = $conn->prepare("SELECT * FROM product_categories");
                                    $result->execute();
                                    for($i=0; $row = $result->fetch(); $i++){
                                ?>
                                <option value=<?echo $row['p_cat_id'];?>> <?echo $row['p_cat_title'];?></option>
                                <?php
                                    }
                                ?>
                                                    
                            </select>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </DV>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
</html>