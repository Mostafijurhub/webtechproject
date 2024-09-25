<?php
include '../model/mydb.php';


$haserror ="";   
$name= "";
$gender="";
$pass="";
$email="" ;
$number= "";






if(isset($_POST["signup"]))
{


 if (strlen($_POST["name"]) > 50) {
    $name ="Name should not exceed 50 characters.<br>";
} 
else {
   $name ="Full Name: " . $_POST["name"] . "<br>";
   $haserror=1;
}


if (strlen($_POST["email"]) < 5 || strpos($_POST["email"], '@') === false) {
   $email="Invalid email format. Email must be at least 5 characters long and contain @.<br>";

} 

else {
    echo "Email Address: " . $_POST["email"] . "<br>";
    $haserror=1;
}

if (strlen($_POST["password"]) < 6 || !preg_match('/[a-z]/', $_POST["password"])) {
    $pass="Password must be at least 6 characters long and contain at least one lowercase letter.<br>";
} 
else {
    echo "Password  is: " . $_POST["password"] . "<br>";
    $haserror=1;
}


if (isset($_POST["gender"]) ) {
   $gender="Please select a gender.<br>";
} else {
    echo "Gender: " . $_POST["gender"] . "<br>";
    $haserror=1;
}

if (substr($_POST["teli"], 0, 1) !== 'false') {
   $number="Phone Number must start with '0'.<br>";
} 
else {
    echo "Phone Number: " . $_POST["teli"] . "<br>";
    $haserror=1;
}

if($haserror==1){


    $mydb=new mydb();
    $conobj=$mydb->creatconobject();
    $insert=$mydb->insertOrder($conobj,"admin",$_REQUEST["email"],$_REQUEST["gender"],$_REQUEST["name"],$_REQUEST["password"]);

    if($insert){

echo "   order created  ";

 }
 else{

   echo " order not created      ";


 }

 $mydb->CloseCon($conobj);




echo "  Ready to store data ";}


else{

    echo " **please fill up the require data**   ";
}


}










?>