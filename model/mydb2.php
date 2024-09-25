<?php

class mydb1{
    public $DBhostname;
public $DBusername;
public $DBpassword;
public $DBname;


function __construct()
{    $this->DBhostname="localhost:3308";
    $this->DBusername="root";
    $this->DBpassword="";
    $this->DBname="labex";
  

}

function creatconobject(){

return new mysqli($this->DBhostname,$this->DBusername,$this->DBpassword,$this->DBname);

}


function insertorder($conn,$table,$fullName,$ssn,$address,$wages,$interestIncome,$dividendIncome,$standardDeduction,$itemizedDeductions){

   $quirystring="INSERT INTO $table(fullName,ssn,address,wages,interestIncome,dividendIncome) Values('$fullName','$ssn','$address','$wages','$interestIncome','$dividendIncome')";
   
   $result=$conn->query($quirystring);

   if($result===false){

  return $coon->error;

   }

   else{  return $result ;}
}





 
   function CloseCon($conn){
  $conn->close();



}








}







?>