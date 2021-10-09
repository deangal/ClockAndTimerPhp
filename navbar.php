<link rel="stylesheet" href="style.css">

<div class="header">

    <div class="inner_header">

        <ul class="navigation">
            <a><li onclick="redirectClock()"><span>Clock</span> 
            </li></a>

            <a><li onclick="redirectTimer()"><span>Countdown</span> 
            </li></a>

        </ul>
        <script>

function redirectClock (id){

 window.location.href="index.php"
 }

 function redirectTimer (){

 window.location.href="timer.php"
 }
</script>
    </div>