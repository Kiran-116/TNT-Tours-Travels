<?php 
   $conn = mysqli_connect('localhost','root','','travel_website');
   $sql1="SELECT * FROM `customer`;";
   $sql2="SELECT * FROM `hotels`;";
   $sql3="SELECT * FROM `admin_master_login`;";
   $sql4="SELECT * FROM `booking`;";
   $sql5="SELECT * FROM `flight`;";
   $sql6="SELECT * FROM `train`;";
   $sql7="SELECT * FROM `transaction`;";
   
   $result1=mysqli_query($conn,$sql1);
   $result2=mysqli_query($conn,$sql2);
   $result3=mysqli_query($conn,$sql3);
   $result4=mysqli_query($conn,$sql4);
   $result5=mysqli_query($conn,$sql5);
   $result6=mysqli_query($conn,$sql6);
   $result7=mysqli_query($conn,$sql7);

   $row1=mysqli_num_rows($result1);
   $row2=mysqli_num_rows($result2);
   $row3=mysqli_num_rows($result3);
   $row4=mysqli_num_rows($result4);
   $row5=mysqli_num_rows($result5);
    $row6=mysqli_num_rows($result6);
    $row7=mysqli_num_rows($result7);
   
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="new_admin.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>TNT | Dashboar</title>
    </head>
    <body>
        <div class="body">
            <div class="sidemenu">
                
                <div class="admin_profile">
                  
                    <img src="b1.jpg" alt="">
                    <h5>Admin</h5>
                  
                </div>
                <nav class="nav">
                    <a href="Dashboard.php" ><li class="li active"><span><i class="fa fa-th-large"></i> </span>Dashboard</li></a>
                    <a href="RegisteredUser.php"><li class="li"><span><i class="fa fa-users"></i> </span>Registered Usesr</li></a>
                    <a href="hotels.php"><li class="li"><span><i class="fa fa-hotel"></i> </span>Hotels</li></a>
                    <a href="placePackage.php"><li class="li"><span><i class="fa fa-birthday-cake"></i> </span>Places (packages)</li></a>
                    <a href="Booking.php"><li class="li"><span><i class="fa-solid fa-ticket"></i></span> Booking</li></a>
                    <a href="flight.php"><li class="li"><span><i class="fa-solid fa-plane"></i></span> Flight</li></a>
                    <a href="train.php"><li class="li"><span><i class="fa-solid fa-train"></i></span> Train</li></a>
                    <a href="contactUs.php"><li class="li"><span><i class="fa-solid fa-train"></i></span> contact Us</li></a>
                    <a href="transaction.php"><li class="li"><span><i class="fa-solid fa-money-bill-wave"></i></span> Transaction</li></a>
                </nav>
                   
       
    
    
            </div>
            <div class="rightframe">
                <div class="dashboard">
                <div class="dashboard_child">
                        <h3>TOATL Customers</h3>
                        <span>
                            <?php echo $row1;?>
                        </span>
                          
                        <p>
                            TOATL ORDER
                        </p>
                    </div>
                    <div class="dashboard_child">
                        <h3>TOTAL Hotels</h3>
                        <span>
                            <?php echo $row2;?>
                        </span>
                        <p>
                            TOTAL Hotels 
                        </p>
                    </div>
                    <div class="dashboard_child">
                        <h3>TOATL Admin</h3>
                        <span>
                            <?php echo $row3;?>
                        </span>
                          
                        <p>
                            TOATL Admin
                        </p>
                    </div>
                    <div class="dashboard_child">
                        <h3>TOTAL Package Booking</h3>
                        <span>
                            <?php echo $row4;?>
                        </span>
                        <p>
                            TOTAL Package Booking
                        </p>
                    </div>
                    <div class="dashboard_child">
                        <h3>TOTAL Flight </h3>
                        <span>
                            <?php echo $row5;?>
                        </span>
                        <p>
                            TOTAL Flight 
                        </p>
                    </div>
                    <div class="dashboard_child">
                        <h3>TOTAL Train </h3>
                        <span>
                            <?php echo $row6;?>
                        </span>
                        <p>
                            TOTAL Train 
                        </p>
                    </div>
                    <div class="dashboard_child">
                        <h3>TOTAL Transaction </h3>
                        <span>
                            <?php echo $row7;?>
                        </span>
                        <p>
                            TOTAL Number of Transaction 
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </body>
    </html>