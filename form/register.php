<?php
$uname=$_POST['uname'];
$upassword=$_POST['upassword'];//nospace
$con=mysqli_connect ("localhost","root","","formregister");//database name
$sql="INSERT INTO formdata (uname,upassword) values('$uname','$upassword')";//check correct variable 
$r=mysqli_query($con,$sql);
if($r){
    echo "data added succesfully" ;//used quoteation mark
}

else{
    echo "failed ! try again ! " ;
}


?>