<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Algorithms</title>

    <!-- Bootstrap -->
    <link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/test.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    

  </head>
  <body>
    

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <h1 class="text-center">Number of blank CDs</h1>
    </div>

    <div class="container">

      <form class="col-sm-6 col-md-offset-3" role="form">
        <h2>Hard disk size in gigabytes (GB)</h2>

        <input id="gigabytes" type="number" class="form-control" placeholder="Enter Gigabytes" required>
       
        <button id="calculate_cds" class="btn btn-lg btn-primary btn-block" type="button">Calculate</button>

        <br>
        
        <div id="result" class="alert alert-success" role="alert">Number of blank CDs: </div>
        <div id="error" class="alert alert-danger" role="alert" style="display:none">Enter a valid number of Gigabytes</div>

        <br>
        <br>

        <a href="index.php" type="button" class="btn btn-info">Back to Menu</a>

      </form>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/number_of_blank_cds.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
    
  </body>
</html>