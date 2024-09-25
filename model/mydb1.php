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

   $quirystring="INSERT INTO $table(fullName,ssn,address,wages,interestIncome,dividendIncome,standardDeduction,itemizedDeductions) Values('$fullName','$ssn','$address','$wages','$interestIncome','$dividendIncome','$standardDeduction','$itemizedDeductions')";
   
   $result=$conn->query($quirystring);

   if($result===false){

  return $coon->error;

   }

   else{  return $result ;}
}

function insertorder1($conn,$table,$taxyear,$Amount){

    $quirystring="INSERT INTO $table(taxyear,Amount) Values('$taxyear','$Amount')";
    
    $result=$conn->query($quirystring);
 
    if($result===false){
 
   return $coon->error;
 
    }
 
    else{  return $result ;}
 }


 function showorderBytime($conn,$table,$taxyear)
 {
    $qrystring="SELECT * FROM $table WHERE taxyear ='$taxyear'";
    $result =$conn->query($qrystring);
    return $result;

 }

 function showPaymentHistory($conn,$table)
 {
    $qrystring="SELECT * FROM $table";
    $result =$conn->query($qrystring);
    return $result;

 }
 
 function showPaymentHistory2($conn,$table)
 {
    $qrystring="SELECT * FROM $table";
    $result =$conn->query($qrystring);
    return $result;

 }

 
   function CloseCon($conn){
  $conn->close();



}




















}



















?>