<?php

class mydb{


    public $DBHostname;
    public $DBUsername;
    public $DBPassword;
    public $DBname;

    function __construct()
    
    {
        $this->DBHostname="localhost:3308";
        $this->DBUsername="root";
        $this->DBPassword="";
        $this->DBname="data" ;}

     function creatconobject()
     {

        return new mysqli($this->DBHostname,$this->DBUsername,$this->DBPassword,$this->DBname);

}

function insertorder($conn,$table,$id,$name,$birthdate,$position,$department,$hiredate,$salary){

$qurystring = "INSERT INTO $table (EmployeeID,Name,DateOfBirth,	Position,Department	,HireDate,Salary) VALUES ('$id','$name','$birthdate','$position','$department','$hiredate','$salary')";
        $result = $conn->query($qurystring);
    

        if ($result === false) {
            return $conn->error;
        } 
        else {
            return $result;
        }
    }

    function showorderByid($conn,$table,$Patientid)
    {
       $qrystring="SELECT * FROM $table WHERE PatientID='$Patientid'";
       $result =$conn->query($qrystring);
       return $result;

    }

    function updatepatientinfo( $conn,$table,$Patientid,$test ){

$qurystring="UPDATE $table SET SuggestedTest='$test' WHERE  PatientID='$Patientid'";
$result=$conn->query($qurystring);
return $result;

    }

    function closeCon($conn) {
        $conn->close();
    }


}







    






















?>