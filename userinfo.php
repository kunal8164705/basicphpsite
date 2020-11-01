<?php
$server="sql101.epizy.com";
$username="	epiz_27097772";
 $password="QJhCFhkd68I"
 $dbname = "epiz_27097772_hackalya";
 $con=mysqli_connect($server,$username,$password,$dbname);


/*if(!$con){
    die("not connected due to" . mysqli_connect_error());
}
echo "sucessfully connected";
*/

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$other=$_POST['other'];

$sql="INSERT INTO `hackalya`.`userinfo` (

`name` ,
`email` ,
`phone` ,
`other`
)
VALUES (
 '$name', '$email', '$phone', '$other'
);";


mysqli_query($con,$sql);

header('location:index.php');
?>