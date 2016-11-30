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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- <style>
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
                    <a class="mdl-navigation__link" href="dashboard.php">Search</a>
                    <a class="mdl-navigation__link is-active" href="shared.php">Shared</a>
                    <a class="mdl-navigation__link" href="about.php">About</a>
                    <a class="mdl-navigation__link" href="contact.php">Contact</a>
                    <a class="mdl-navigation__link" href="logout.php">Logout</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer mdl-layout--small-screen-only">
            <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                    <a class="mdl-navigation__link" href="a=dashboard.php">Search</a>
                    <a class="mdl-navigation__link is-active" href="shared.php">Shared</a>
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
          </form><!-- 
           <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="sample3">
            <label class="mdl-textfield__label" for="sample3">To Location</label>
          </div> -->
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="Date" id="sample3">
            <label class="mdl-textfield__label" for="sample3">From Date</label>
          </div><br>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="Date" id="sample3">
            <label class="mdl-textfield__label" for="sample3">To Date</label>
          </div><br>
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" id="search">Show shared cabs</button>
        </center> <br> <br> <br>

        
        <div id="display_cars" class="mdl-grid portfolio-max-width"> </div>
  <div id="footer"></div>

    <script type="text/javascript">
    $(document).ready(function(){ //DOM
      var diff = 0;
        $("#search").click(function(e){ //onclick function
            e.preventDefault();
            $.ajax({
                      type: "POST",
                      url: "http://localhost/gosafe/getSharedCars.php",
                      cache: false,
                      success: function(result){
                        //alert(result);
                        var car = JSON.parse(result);
                        //alert(car[0].car_number);
                        for(i in car)
                        {  
                          diff = car[i].seats - car[i].max_number
                                 var display =
                                            +'<div class="mdl-grid portfolio-max-width">'
                                            +'<div class="mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet mdl-card  mdl-card mdl-shadow--4dp">'
                                            +'<div class="mdl-card__title mdl-card--expand portfolio-blog-card-strip-bg mdl-color-text--white">'
                                            +'<h2 class="mdl-card__title-text">'+car[i].car_number+'</h2>'
                                            +'</div>'
                                            +'<div class="mdl-card__supporting-text">'
                                            +'<p>Car Model : '+car[i].car_name+' </p>'
                                            +'<p>From date : '+car[i].from_date+' </p>'
                                            +'<p>From time : '+car[i].from_time+' </p>'
                                            +'<p>From Location : '+car[i].from_location+' </p>'
                                            +'<p>To Location : '+car[i].to_location+' </p>'
                                            +'<p>Number of Seates available : '+diff+'</p>'
                                            +'<p> Description : '+car[i].desc+'</p>'
                                            +'</div>'
                                            +'<div class="mdl-card__actions mdl-card--border">'
                                            +'<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" data-upgraded=",MaterialButton,MaterialRipple">'
                                            +'Book Now'
                                            +'<span class="mdl-button__ripple-container">'
                                            +'<span class="mdl-ripple">'
                                            +'</span>'
                                            +'</span>'
                                            +'</a>'
                                            +'</div>'
                                            +'</div>'
                                            +'</div>';
                                            console.log(display);
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
  <script>
   $(document).ready(function(){
    var foot = 
    //prepare footer here

   $('footer').append(  );
   });
</script>
</body>

</html>