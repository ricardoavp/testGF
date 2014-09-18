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
        <h1 class="text-center">Hangman</h1>
    </div>

    <div class="container">

      
      <form class="col-sm-2" role="form">
        <h2>Faults</h2>
        <br>
        <span id="view_faults" class="faults">0</span>
        <br>
        <span>Maximum 5</span>
        
      </form>

      <form id="form-login" class="col-sm-6 col-md-offset-1" role="form">
        <h2>Guess the Animal</h2>

        <div id="alert-won" class="alert alert-success" role="alert" style="display:none">YOU WON!!!</div>
        <div id="alert-repeat" class="alert alert-warning" role="alert" style="display:none">This letter is already present</div>
        <div id="alert-loser" class="alert alert-danger" role="alert" style="display:none">You lost... try again!</div>


        <?php
            $animals = array("FOX", "COYOTE", "MOUSE", "RABBIT", "EAGLE", "SNAKE", "SALAMANDER", "PORCUPINE", "ELEPHANT");
            $random_animal = array_rand($animals, 1);
            //echo $animals[$random_animal];
            $number_of_letters = strlen($animals[$random_animal]);
          ?>

        <input id="word_hidden" type="hidden" value="<?php echo $animals[$random_animal];?>">

        <input id="faults" type="hidden" value="0">

        <div id="word" class="word">
          <?php 

            $hangman = '';
            for($i = 0; $i < $number_of_letters; $i++){
                echo '-';
                $hangman .= '-';
            }
          ?>
           
        </div>

        <input id="word_partial" type="hidden" value="<?php echo $hangman;?>">
       
        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('Q')">Q</button>
        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('W')">W</button>
        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('E')">E</button>
        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('R')">R</button>
        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('T')">T</button>
        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('Y')">Y</button>
        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('U')">U</button>
        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('I')">I</button>
        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('O')">O</button>
        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('P')">P</button>

        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;

        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('A')">A</button>
        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('S')">S</button>
        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('D')">D</button>
        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('F')">F</button>
        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('G')">G</button>
        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('H')">H</button>
        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('J')">J</button>
        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('K')">K</button>
        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('L')">L</button>

        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('Z')">Z</button>
        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('X')">X</button>
        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('C')">C</button>
        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('V')">V</button>
        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('B')">B</button>
        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('N')">N</button>
        <button class="btn btn-lg btn-default" type="button" onclick="press_the_letter('M')">M</button>

        <br>
        <br>

        <a href="hangman.php" type="button" class="btn btn-warning">Reset game</a>
        <a href="index.php" type="button" class="btn btn-info">Back to Menu</a>

      </form>
      
      <form id="form-login" class="col-sm-2 col-md-offset-1" role="form">
        <div id='animal_list' style='display:none'>
          <?php foreach($animals as $animal){
            echo $animal.'<br>';
          }?>

        </div>
        <button id="view_animal_list" class="btn btn-lg btn-info" type="button">View animals list</button>
      </form>
      

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/hangman.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
    
  </body>
</html>