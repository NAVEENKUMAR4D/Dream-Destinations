<?php
include 'conn.php';
$uname = $_POST['uname1'];
$uname2 = $_POST['uname2'];
$email = $_POST['mail'];
$pass = $_POST['pname'];
$phoneno = $_POST['pno']; 
$dataTime = date("Y-m-d ");

/*
$query = "CREATE TABLE PROJECT(FIRSTNAME VARCHAR(15) ,LASTNAME VARCHAR(15), EMAIL VARCHAR(35), PASS VARCHAR(15) , PHONENO CHAR(10 ), CREATED_ON     VARCHAR(30) ) ;";
if(mysqli_query($connetion,$query)){
     
}
else{
     
}
*/
$query ="SELECT count(EMAIL) AS COUNT FROM PROJECT WHERE EMAIL='$email';";
$check = mysqli_query($connetion,$query);
 
if(mysqli_num_rows($check)){
    while($row  = mysqli_fetch_assoc($check)){ 	 
        $count =  $row["COUNT"] ;  
    } 
} 
if($count<1){
    if(mysqli_query($connetion,$query)){
        $query =" INSERT INTO PROJECT(FIRSTNAME,LASTNAME,EMAIL,PASS,PHONENO,CREATED_ON) values('$uname','$uname2','$email','$pass','$phoneno','$dataTime'  ); ";
        if(mysqli_query($connetion,$query)){
            echo "Regestration is successful.Account is created";
        }
        else{
            echo "regestration is NOT successful " ;
        }
    
        
        ?>
        <a href="mainpage.php"><button>go back</button></a><br>
         
    
    <?php
    
    
    }
     
}
else{
    echo "An Account is EXISTED With Given Email Id. Try, Another Email Id. ";
}
 

?>