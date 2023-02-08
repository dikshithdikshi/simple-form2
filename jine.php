<?php
session_start();
$conn = mysqli_connect('localhost','root', '','dikshi');
if (mysqli_connect_errno()){
    echo "connection failed :".mysqli_connect_errno();
}
else{
    echo "connected ";
    }
    $a=$_GET["mm1"];
    $b=$_GET["mm2"];
    $c=$_GET["mm3"];
 $query1 = "SELECT * FROM `sign_in` WHERE `user_name` ='$a' and `email` = '$b' and `$encrpt` = '$c'";
    $fetch = mysqli_query($conn,$query1);
$count = mysqli_num_rows($fetch);
$data = mysqli_fetch_all($fetch,MYSQLI_ASSOC);

$_SESSION['user_id'] = $data[0]['id'];
if($count>0){
    header("location:dashbord/index.php");
}
else{
    header("location:Arambh_singin.php");
}
?>