<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>GoSafe Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="assets/login_css/demo.css" />
        <link rel="stylesheet" type="text/css" href="assets/login_css/style.css" />
		<link rel="stylesheet" type="text/css" href="assets/login_css/animate-custom.css"/>
    </head>
    <body>
        <div class="container">
            <!-- gosafelogin top bar -->
            <div class="codrops-top">
                <a href="https://moodle.niituniversity.in/moodle/">
                    <strong> for gatepass </strong> click here
                </a>
                
                </span>
                <div class="clr"></div>
            </div><!--/ gosafelogin top bar -->
            <header>
                <h1>GOSAFE CAR BOOKING SYSTEM</h1>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="http://localhost/gosafe/loginUser.php" autocomplete="on" method="POST"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" >Your email</label>
                                    <input id="username" name="username" required="required" type="email" placeholder="mail@st.niituniversity.in"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="http://localhost/gosafe/validuser.php" method="POST"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="fullname" class="uname" data-icon="u">Your Full Name</label>
                                    <input id="fullname" name="fullname" required="required" type="text" placeholder="abcdef" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="email" name="email" required="required" type="email" placeholder="ancd.xyz@in"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="phone_number" class="uname" data-icon="u">Contact Number</label>
                                    <input id="contact" name="contact" required="required" type="text" placeholder="123456789" />
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_Log in"> Go and log in </a>
								</p>
                            </form>
                        </div>						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>
