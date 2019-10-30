<!DOCTYPE html>
<html lang="eu-US">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Insert a title on index.html page -->
    <title>Happy Trip</title>


    <!-- Insert a Logo left of the title on tab -->
    <link rel="shortcut icon" href="img/HT_LOGO.png"/>


    <!-- The style of fonts by google -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">


    <!--fontawesome-->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

    <!-- Insert style.css file -->
    <link rel="stylesheet" href="css/style.css">
    


</head>


<body>
   
    


         

  <!--Insert Navigation Bar-->
    <nav class="navbar navbar-default">
        <div class="container-fluid" id="container-fluid">
            
            <ul class="nav navbar-nav">
                <li class="nav_bar_index"><a href="index.php"><i class="fa fa-home fa-lg" aria-hidden="true"></i>Home</a></li>
                <li class="nav_bar_index"><a href="User_Profile.php"><i class="fa fa-user" aria-hidden="true"></i>User Profile</a></li> 
            </ul>
        </div>
    </nav>
    
    <!--Header&Form included in Section id="home"-->
    <section id="home">
        <div id="home-cover">
            <div id="home-content-box">
                <div id="home-content-box-inner" class="text-center">
                    <div id="home-heading">
                        <h1>Find the Perfect Hotel now!!</h1><br><br><br>
                           <div id="home-content-form">
                        
                             <form method="get" action="Hotel_Results.php">
                                <div id="home-content-fields">
                                 
                                   <ul style="list-style-type:none" id="li_fields">
                                          
                                           
                                             <li class=city_li><select name="city" id="cities">
                                                 <option value="" disabled selected hidden>Select City</option>
                                                 <option value="Athens">Athens</option>
                                                 <option value="Thessaloniki">Thessaloniki</option>
                                                 <option value="Kavala">Kavala</option>
                                                 <option value="Santorini">Santorini</option>
                                            </select></li>
                                            
                                            
                                             
                                            
                                                <li class=city_li><select name="roomType" id="rooms">
                                                 <option value="" disabled selected hidden>Select Room Type</option>
                                                    <option value="1">Single Room</option>
                                                    <option value="2">Double Room</option>
                                                    <option value="3">Triple Room</option>
                                                    <option value="4">Fourfold Room</option>
                                                </select></li><br><br>
                                        
                                          
                                          
                                           
                                         
                                         <li class=city_li><input type="date"  name="bday" min="2018-11-03" placeholder="Check-In" title="Please choose a Check-In date"><br></li>
                                         
                                        
                                             
                                              <li class=city_li><input type="date" id="Check-Out" name="bday" min="2018-11-04" placeholder="Check-Out" title="Please choose a Check-Out date"><br></li>
                                         
                                         
                                       
                                  </ul>
                              <div id="home-btn" class="text-center">
                                <input type="submit" class="btn btn-lg"  title="Search A Room"
                                value="Search">
                                
                               
                              </div>
                            </div>
                        </form>
                     </div>
                  </div>
              </div>
           </div>
         </div>
    </section>

   
    <!--Insert a Footer-->
    <footer>
        <p>Designed & developed by Eleni Christodoulaki</p>
        <p>Copyright <i class="fa fa-copyright" aria-hidden="true">
            </i> 2018 EU
        </p>

    </footer>
    
    <!--Insert jQuery.js file-->
    <script src="js/jquery.js"></script>

    <!--Bootrstrap for JS-->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Insert custom.js file -->
    <script src="js/custom.js"></script>
</body>

</html>
