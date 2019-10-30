<!DOCTYPE html>
<html lang="eu-US">

<head>

    <title>Hotel Results</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Insert an icon left of the title -->
    <link rel="shortcut icon" href="img/HT_LOGO.png" />
    <!-- The style of fonts by google -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <!--fontawesome-->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <!--Insert Css File-->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>


    <!--Connection with PHP-->
    <?php
    $servername = "localhost";
    $username = "wda_2018";
    $password = "";
         // Create connection
           $conn = mysqli_connect("localhost", "root", "", "wda_2018");

         // Check connection
           if (!$conn)
             {
                die("Connection failed: " . mysqli_connect_error());
             }
          //echo "Connected successfully";
     ?>
       
        <?php
        if((isset($_GET["city"])&&(!isset($_GET["roomType"]))))
        {
            $x=$_GET["city"];
            $sql="SELECT * FROM room WHERE city='$x'";
        }
        elseif((!isset($_GET["city"])&&(isset($_GET["roomType"]))))
        {
          
           $y=$_GET["roomType"];
           $sql="SELECT * FROM room WHERE (room_type='$y')";
        }
        elseif((isset($_GET["city"])&&(isset($_GET["roomType"]))))
        {
           $x=$_GET["city"];
           $y=$_GET["roomType"];
           $sql="SELECT * FROM room WHERE (city='$x') &&  (room_type='$y')";
        }
        elseif((!isset($_GET["city"])&&(!isset($_GET["roomType"]))))
          {
           $sql="SELECT * FROM room";?>
         <?php
            
          }
               $result= $conn->query($sql);
                 
         ?>

         
        <!--About more_filtres (FORM) in hotel_result.php-->


<!--Insert Navigation Bar-->
    <nav class="navbar navbar-default">
        <div class="container-fluid" id="container-fluid">
            <ul class="nav navbar-nav">
                <li class="nav_bar_index"><a href="index.php"><i class="fa fa-home fa-lg" aria-hidden="true"></i>Home</a></li>
                <li class="nav_bar_index"><a href="User_Profile.php"><i class="fa fa-user" aria-hidden="true"></i>User Profile</a></li> 
            </ul>
        </div>
    </nav>
    
     

    <div id="wrapper">
        <div id="header-content">
            <h1>Search Results</h1> 
        </div>
                        <div id="Rooms_Filtres">
                     
                          <form method="get" action="Hotel_Results.php">
                           
                             <div class="More_Filtres_text">
                               <h3>More Filtres:</h3>
                             </div>
                         
                            <h4>City</h4>
                              <ul>
                                <input type="radio" name="city" value="Athens">Athens<br>
                                <input type="radio" name="city" value="Thessaloniki">Thessaloniki<br>
                                <input type="radio" name="city" value="Santorini">Santorini<br>
                                <input type="radio" name="city" value="Kavala">Kavala<br>

                              </ul>



                    <h4>Room Type</h4>

                    <ul>
                        <input type="radio" name="roomType" value="1">Single Room<br>
                        <input type="radio" name="roomType" value="2">Double Room<br>
                        <input type="radio" name="roomType" value="3">Family Room<br>
                        <input type="radio" name="roomType" value="4">Multiple Room<br>
                    </ul>
                    <div class="slidecontainer">
                      <h4>Price per Night: <span id="demo"></span>€</h4><br>
                      <input type="range" min="1" max="500" value="50" class="slider" id="myRange">
                    </div>

                    <script>
                        var slider = document.getElementById("myRange");
                          var output = document.getElementById("demo");
                             output.innerHTML = slider.value;
                             slider.oninput = function()
                             {
                               output.innerHTML = this.value;
                             }
                    </script><br>
                    
                    <h4>Check-In</h4>

                    <input type="date" name="bday" min="2018-11-03" placeholder="Check-In"><br><br>
                    <h4>Check-Out</h4>
                    <input type="date" name="bday" min="2018-11-04" placeholder="Check-Out"><br><br><br>
                    <input type="submit" class="btn btn-lg" value="Find Hotel" title="Search A Room">
                    <br><br>
                    
                    
                </form>
                                   
                </div> 
           
        <div class="HotRes">
           
             <?php
               while($row = $result->fetch_assoc()){ ?>
                 <div class="hotel_result">


                    <div class=hotel_result_pic>
                          <img src="img/rooms/<?php echo $row["photo"]?>">
                    </div>
                    
                             <div class="hotel_result_header">
                                 <h4><b><?php echo $row["name"]?></b></h4>
                                 <h5><?php echo $row["area"]?></h5>
                                 <h6><?php echo $row["short_description"]?></h6>
                             </div>
                             <div class="price_guests">
                                   <div class="price_dv">
                                   <p>Price Per Night: <?php echo $row["price"]?>€</p>
                                   </div>
                                   <div class="guests_dv">
                                   <p>Count Of Guests: <?php echo $row["room_type"]?></p>
                                   </div>
                               
                             </div>

                            <form method="post" action="Room.php">
                                <input type="hidden" name="roomId" value="<?php echo $row["room_id"]?>">
                                <div id="Go_toRoom">
                              
                                <input type="submit"  id="but_Go_to_Room" class="btn btn-lg" value="Go to Room Page"  title="Search A Room">
                                </div>
                            </form>   
                 </div>
            <?php } ?>
        </div>
     </div>
    <br>
    <footer>
        <p>Designed & developed by Eleni Christodoulaki</p>
        <p>Copyright<i class="fa fa-copyright" aria-hidden="true">
            </i>2018 EU
        </p>
    </footer>

</body>

</html>