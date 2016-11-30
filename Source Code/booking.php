<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A portfolio template that uses Material Design Lite.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Gosafe - Booking</title>
    <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.grey-pink.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!--     <style>
    .demo-card-wide.mdl-card {
      width: 512px;
    }
    .demo-card-wide > .mdl-card__title {
      color: #fff;
      height: 176px;
      background: url('images/image.jpg') center / cover;
    }
    .demo-card-wide > .mdl-card__menu {
      color: #fff;
    }
    </style> -->
</head>

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header mdl-layout__header--waterfall portfolio-header">
            <div class="mdl-layout__header-row portfolio-logo-row">
                <span class="mdl-layout__title">
                    <div class="portfolio-logo"></div>
                    <span class="mdl-layout__title">GOSAFE CAR BOOKING SYSTEM</span>
                </span>
            </div>
        </header>
        <main class="mdl-layout__content">
        <center>
        <form method="POST">
         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="date" id="wdate" name="wdate">
            <label class="mdl-textfield__label" for="sample3">wanted date</label>
          </div><br>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="wtime" name="wtime">
            <label class="mdl-textfield__label" for="sample3">wanted time</label>
          </div><br>
           <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="seats" name="seats">
            <label class="mdl-textfield__label" for="sample3">no. of seats</label>
          </div><br>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="share" name="share">
            <label class="mdl-textfield__label" for="sample3">want to share?? yes</label>
          </div><br>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="flocation" name="flocation">
            <label class="mdl-textfield__label" for="sample3">From Location</label>
          </div><br>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="tlocation" name="tlocation">
            <label class="mdl-textfield__label" for="sample3">To Location</label>
          </div><br>
         
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" id="book">Book Now</button>
        </form>
        </center> <br> <br> <br>
        <center>
        <!-- <div id="display_cars"> </div> -->
        </center>
        </main>
        </div>
        <script type="text/javascript">
          var carid = "temp";
          carid = window.localStorage.getItem('userkey');
        </script>
    <script type="text/javascript">
    $(document).ready(function(){ //DOM
        $("#book").click(function(e){ //onclick function
            e.preventDefault();
            //var carnumber = $("#carnumber").val();
            var wdate = $("#wdate").val();
            var wtime = $("#wtime").val();
            var seats = $("#seats").val();
            var share = $("#share").val();
            var flocation = $("#flocation").val();
            var tlocation = $("#tlocation").val();
            var role_id = 1;
             var dataString = 'carid='+ carid +'&wdate='+ wdate + '&wtime='+ wtime + '&share='+ share + '&seats='+ seats + '&flocation='+ flocation + '&tlocation='+ tlocation + '&role_id='+ role_id;
            $.ajax({
                      type: "POST",
                      data: dataString,
                      url: "http://localhost/gosafe/bookAvaibleCar.php",
                      cache: false,
                      success: function(result){
                          alert(result);
                          window.location.href = "dashboard.php";
                                        },
                        error: function(result){
                          
                          alert("Not able to connect to server");
                               }
                      });
            });
     });
  </script>
<!--   <script type="text/javascript">
    $(document).on("click", "#book", function(){
      echo(You have booked successfully);
    });
  </script>  -->
  <script type="text/javascript">
     $(document).ready(function(){ //DOM
      var carid = "temp";
          carid = window.localStorage.getItem('userkey');
      var dataString = 'carid =' + carid; 
      $.ajax({
              type: "POST",
              data: dataString,
              url: "http://localhost/gosafe/getCarnumber.php",
              cache:false,
              success: function(result){
                alert(result);
              },
              error: function(result){
                alert("Not able to connect to server");
              }
            });
          };
  </script>  
  <?php
  $to      = 'jaganreddyguda@gmail.com';
  $subject = 'automailing is working';
  $message = 'hello';
  $headers = 'From: gosafe2018@gmail.com' . "\r\n" .
    'Reply-To: jaganreddyguda@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);
  ?> 
</body>

</html>