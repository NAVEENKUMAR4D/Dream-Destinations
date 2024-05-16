<?php
include 'conn.php';
if($_SERVER['REQUEST_METHOD']==="POST"){
    $uname = $_POST['uname1'];
    $uname2 = $_POST['uname2'];
    $email = $_POST['email'];
    $destination = $_POST['destination']; 
    $date = $_POST['journey'];

    $query =" INSERT INTO bookings(FIRSTNAME,LASTNAME,EMAIL,DESTINATION,JOURNEYDATE) values('$uname','$uname2','$email','$destination','$date'  ); ";
    if(mysqli_query($connetion,$query)){
        echo "Booking is Successfull";
    }
    else{
        echo "Booking is UnSuccessfull " ;
    }
 
 
 
    //error
    //print_r ($destination);

}


?>

<a href="dashboardUser.php">GO back</a>

 

 