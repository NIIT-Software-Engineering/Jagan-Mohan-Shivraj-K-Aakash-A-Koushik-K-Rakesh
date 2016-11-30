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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <style type="text/css">
        label{
            visibility: hidden;
        }
    </style>
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
            <div class="mdl-layout__header-row portfolio-navigation-row mdl-layout--large-screen-only">
                <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                    <a class="mdl-navigation__link is-active" href="dashboard.php">Search</a>
                    <a class="mdl-navigation__link" href="shared.php">Shared</a>
                    <a class="mdl-navigation__link" href="about.php">About</a>
                    <a class="mdl-navigation__link" href="contact.php">Contact</a>
                    <a class="mdl-navigation__link" href="logout.php">Logout</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer mdl-layout--small-screen-only">
            <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                    <a class="mdl-navigation__link is-active" href="a=dashboard.php">Search</a>
                    <a class="mdl-navigation__link" href="shared.php">Shared</a>
                    <a class="mdl-navigation__link" href="about.php">About</a>
                    <a class="mdl-navigation__link" href="contact.php">Contact</a>
                    <a class="mdl-navigation__link" href="logout.php">Logout</a>
            </nav>
        </div>
        <center>
          <!-- <form>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="sample3">
            <label class="mdl-textfield__label" for="sample3">From Location</label>
          </div><br>
          </form> -->  
          <form action="#">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z]*" id="username" />
          <label class="mdl-textfield__label" for="username">From Location</label>
          <span class="mdl-textfield__error">Only alphabet and no spaces, please!</span>
          </div>
          </form>
          <form action="#">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z]*" id="username" />
          <label class="mdl-textfield__label" for="username">To Location</label>
          <span class="mdl-textfield__error">Only alphabet and no spaces, please!</span>
          </div>
          </form>
          <!--<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="sample3">
            <label class="mdl-textfield__label" for="sample3">To Location</label>
          </div> -->
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="date" id="sample3">
            <label class="mdl-textfield__label" for="sample3">From Date</label>
          </div><br>

          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="Date" id="sample3">
            <label class="mdl-textfield__label" for="sample3">To Date</label>
          </div><br>
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" id="search">Search</button>
        </form>
        </center> <br> <br> <br>
        
        <center><div id="display_cars"> 
        
</div></center>
    <script type="text/javascript">
    $(document).ready(function(){ //DOM
         $("#search").click(function(){
            var i=0;
            var diff=0;
             $.ajax({
                      type: "POST",
                      url: "http://localhost/gosafe/getCars.php",
                      cache: false,
                      success: function(result){
                        //alert(result);
                        var car = JSON.parse(result);
                        for(i in car)
                        {
                        var display =  '<div class="demo-card-wide mdl-card mdl-shadow--2dp" id="parent">'
                                       +'<div class="mdl-card__title">'
                                       +'<h2 class="mdl-card__title-text">'+car[i].car_number+'</h2>'
                                       +'</div>'
                                       +'<div class="mdl-card__supporting-text">'
                                       +'<p>Car Model : '+car[i].car_name+' </p>'
                                       +'<p>Number of Seates : '+car[i].seats+'</p>'
                                       +'<p> Description : '+car[i].desc+'</p>'
                                       +'<label>'+car[i].carid+'</label>'
                                       +'</div>'
                                       +'<div class="mdl-card__actions mdl-card--border">'
                                       +'<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="book">Book Now</button>'
                                       +'</div>'
                                       +'</div>';
                        $("#display_cars").append(display);
                       }
                                                },
                        error: function(result){
                          
                          alert("Not able to connect to server");
                               }
                      });
           }); 
     });
  </script>
  <script type="text/javascript">
      $(document).on("click", "#book", function(){
      var carid = $(this).parents('#parent').find('label').text();
     window.localStorage.setItem('userkey', carid);
     window.location.href = "booking.php";
    });
  </script>
</body>

</html>
