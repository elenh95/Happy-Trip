<!DOCTYPE html>
<html lang="eu-US">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Insert a title on index.html page -->
    <title>Room</title>


    <!-- Insert an icon left of the title -->
    <link rel="shortcut icon" href="img/HT_LOGO.png" />


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
            
           $z =$_POST["roomId"];
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
        
         
           
    <form method="get" action="Hotel_Results.php">
    <div class="Big_Field">
        <div class="header">
             
                 <p><b>
                  <?php echo $row["name"]?> -
                  
                  
                  <?php echo $row["area"]?> |
                  
                
                  Price Per Night: <?php echo $row["price"]?> €
                 </b></p>
              
              
        </div><br>
             
        <div class="image_hotel">
             <img src="img/rooms/<?php echo $row["photo"]?>">
        </div><br>
        
         <div id="details_room">
             
                 <p><b>
                 |   <i class="fa fa-wifi" aria-hidden="true"></i>
                     Wi-Fi: <?php 
                          if ($row["wifi"]==1)
                          {
                           echo "Available";
                          }
                          elseif($row["wifi"]==0)
                          {
                            echo "Not Available";
                          }
                          ?>
                          |
                  
                 <i class="fa fa-paw" aria-hidden="true"></i>
                    Pet-Friendly : <?php 
                          if ($row["pet_friendly"]==1)
                          {
                           echo "Available";
                          }
                          elseif($row["pet_friendly"]==0)
                          {
                            echo "Not Available";
                          }
                          ?>
                          |  
                 <i class="fa fa-users" aria-hidden="true"></i>
                 Count of Guests : <?php 
                          
                           echo $row["room_type"];
                         
                          ?>
                          |  
                  
                 <i class="fa fa-parking" aria-hidden="true"></i>
                 Parking : <?php 
                          if ($row["parking"]==1)
                          {
                           echo "Available";
                          }
                          elseif($row["parking"]==0)
                          {
                            echo "Not Available";
                          }
                          ?>
                             |
                 </b></p>
              
              
        </div><br>
        
        
        <div class="Long_Description">
            
            <h3>Room Description</h3>
            <h4><?php echo $row["long_description"]?></h4>
            
        </div>
        <form method="post" action="User_Profile.php">
                                <input type="hidden" name="roomId" value="<?php echo $row["room_id"]?>">
                                <div id="Go_User_Pr">
                              
                               <input type="submit" id="but_BookNow" class="btn btn-lg" value="Already Booked"  title="Search A Room">
                               </div>
                           
    
        </form>
        <br><br>
        <div>
             <iframe id="map"
                frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3145.0259586082775!2d23.74802901505763!3d37.976523508299806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bd44d9f03945%3A0x96690683c8008e91!2zzqfOr867z4TOv869IM6RzrjOt869z47OvQ!5e0!3m2!1sel!2sgr!4v1542711758704" allowfullscreen>
             </iframe>
           
        </div>
        <div class="Room_Page_hr">
                    <hr> 
        </div>
        
        
        <div>
            <h4>Reviews</h4> 
            <h6>Amazing Hotel</h6>
            <span class="fa fa-star checked"  aria-hidden="true"></span>
            <span class="fa fa-star checked"  aria-hidden="true"></span>
            <span class="fa fa-star checked"  aria-hidden="true"></span>
            <span class="fa fa-star checked"  aria-hidden="true"></span>
            <span class="fa fa-star checked"  aria-hidden="true"></span>
        </div><br>
         <div>
            <h4>Add Review</h4>
            <span class="fa fa-star "  aria-hidden="true"></span>
            <span class="fa fa-star "  aria-hidden="true"></span>
            <span class="fa fa-star "  aria-hidden="true"></span>
            <span class="fa fa-star "  aria-hidden="true"></span>
            <span class="fa fa-star "  aria-hidden="true"></span><br>
            <textarea rows="4" cols="50" placeholder="Rating..."></textarea><br>
            <br>
         <form action="User_Profile.php">
         <div>
              <input type="submit" class="btn1 btn-lg"    title="Submit a Review"
                                value="Submit">
        </div>
        </form>
        </div>




  </div>
   </form>
   


 


<!--Insert a Footer-->
    <footer>
        <p>Designed & developed by Eleni Christodoulaki</p>
        <p>Copyright <i class="fa fa-copyright" aria-hidden="true">
            </i> 2018 EU
        </p>

    </footer>
    
    

    <!--Bootrstrap for JS-->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    
    <!--Insert jQuery.js file-->
    <script src="js/jquery.js"></script>

    <!-- Insert custom.js file -->
    <script src="js/custom.js"></script>
    
    

    
    
</body>

</html>

