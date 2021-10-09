<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHP Timer</title
  
        <script type="text/javascript">
        function countdown(secs, e){
          
                const element = document.getElementById(e);
                element.innerHTML = ""+secs+"";
                secs--;
                const timer = setTimeout('countdown('+secs+',"'+e+'")', 1000);
                if(secs < 0 ){
                clearTimeout(timer)
                setTimeout(() => {
                    alert('Countdown is over')
                }, 1);
               


                }
              
        }
        </script>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        
      
    </head>
    
    <body>
    <?php include('navbar.php'); ?>
    
    <div id="timerInput">
    <form method="post" action="timer.php">
    <input type="number" class="input" min=0 id="status" name="inputnumber" required pattern="[0-9]"/>
    
    <button type="submit" >
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="green" style="border: radius 50%;" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
    </svg>
    </button>
    </form>

    </div>
   
    <p id="time">
      <?php

    $seconds = 0;
    echo "Enter seconds";
    ?>
      </p>
    <script type="text/javascript">
   
    countdown("<?php
      echo $_POST['inputnumber'];
    ?>","time");

  </script>

     
</head>

</html>
