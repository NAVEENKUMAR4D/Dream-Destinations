<?php
$connetion =mysqli_connect("localhost","root","","sadiqdb");
if($connetion){
     
}
else{
    echo "error/: ".mysqli_error($connetion).'<br>';
}

?>

