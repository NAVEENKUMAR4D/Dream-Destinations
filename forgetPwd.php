<?php
include 'conn.php';
$email = $_POST['email'];
$pno = $_POST['pno'];
$pwd =$_POST['pwd'];

$query = "SELECT EMAIL , PHONENO FROM PROJECT WHERE EMAIL= '$email';";
$check = mysqli_query($connetion,$query);
 
if( mysqli_num_rows($check)){
	 
			while($row  = mysqli_fetch_assoc($check)){
			 
               $mail =  $row["EMAIL"] ;
                $mno =  $row["PHONENO"]; 
                 
            } 
             
            if($pno==$mno){
                $query = "UPDATE PROJECT SET PASS = '$pwd' WHERE EMAIL ='$email' ;";
                if(mysqli_query($connetion,$query)){
                    echo "password is updated";
                    ?>
                    <p class="lead"> <a href="mainpage.php">clickHere</a>  </p>
                    <?php
                }
                else{
                    echo "pwd is not updated";
                } 
            }
            else{
                echo "Invalid Mobile Number";
            }
}
else{
    echo "account doesn't exists";
    ?>
    <p class="lead"> <a href="createAccount.html">clickHere</a> to create an account</p>
    <?php
}


?>