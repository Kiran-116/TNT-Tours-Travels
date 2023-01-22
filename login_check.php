<?php
        
                echo "<br><br>";
                echo "success";

                // include('conn2.php');
                $conn = mysqli_connect('localhost','root','','travel_website');
                $userid=$_POST['username'];
                $pass=$_POST['password'];

                $sql="SELECT * FROM master_login WHERE user_id='$userid' and pass_word='$pass'";
                $res=mysqli_query($conn,$sql);
                if($result=mysqli_fetch_assoc($res))
                {
                    session_start();
                    $_SESSION['user']=$userid;
                    $_SESSION['pass']=$pass;
                    // echo "we have saved your session";
                
                    // $_SESSION['userid']=$result['userid'];  // code is able to run properly without this line too
                    header('location:home.php');
                }
                else
                {
                   
                    header('location:signUp_Login.html');
                }
        ?>