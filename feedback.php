<?php
include 'conn.php';
$fname = $_POST['fname'];
$fmail = $_POST['fmail'];
$fmno =$_POST['fmno'];
$fmsg =$_POST['fmsg'];
$query =" INSERT INTO feedback  values('$fname','$fmail','$fmno','$fmsg'   ); ";
if(mysqli_query($connetion,$query)){
    echo "Regestration is  iNSERTED";
    header('Location: mainpage.php ');
}
else{
    echo "regestration is NOT successful " ;
}

?>