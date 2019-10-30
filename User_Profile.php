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
            
           $z = $_POST["roomId"];
           $sql="SELECT * FROM room where (room_id='$z')";
           $result= $conn->query($sql);
           $row = $result->fetch_assoc();
         
        ?>
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
            <h2>My Bookings</h2> 
        </div>
                        <div id="FAV_REV">
                            <form>
                                <div class="Favourites">
                                    <h3>FAVORITES</h3>
                                    <h5>1.Hilton</h5>
                                </div>
                                <div class="Reviews">
                                    <h3>REVIEWS</h3>
                                    <h5>1.Megali Bretania</h5>
                                    <h5>2.Allonisos Hotel</h5>
                                </div>
                            </form>
                                   
                        </div> 
                        <div class="HotRes">
                        <div class="hotel_result">


                    <div class=hotel_result_pic>
                          <img src="img/rooms/room-1.jpg">
                    </div>
                    
                             <div class="hotel_result_header">
                                 <h4><b>Hotel Hilton</b></h4>
                                 <h5>Area</h5>
                                 <h6>blblablabalabla</h6>
                             </div>
                             <div class="price_guests">
                                  
                                   <p>Price Per Night: 500 €</p>
                                   
                                   
                                   <p>Room Type : 2 </p>
                                  
                                   
                                   <p>Check In Date </p>
                                  
                                   
                                   <p>Check Out Date </p>
                                   
                               
                             </div>

                            <form method="post" action="User_Profile.php">
                                <input type="" name="roomId" value="<?php echo $row["room_id"]?>">
                                <div id="Go_toRoom">
                              
                               <input type="submit"  id="but_Go_to_Room" class="btn btn-lg" value="Go to Room Page"  title="Search A Room">
                            </div>
                            </form>
                             
                            
                   
                    </div>
            
        </div>


       </div><br>
    

    <footer>
        <p>Designed & developed by Eleni Christodoulaki</p>
        <p>Copyright<i class="fa fa-copyright" aria-hidden="true">
            </i>2018 EU
        </p>
    </footer>

</body>

</html>