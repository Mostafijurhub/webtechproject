<?php
include '../model/mydb1.php';


class DashboardController {
  private $model;

  public function __construct() {
      // Initialize the model
      $this->model = new mydb1();
  }

  // Function to fetch payment history
  public function getPaymentHistory() {
      // Create a connection object
      $conn = $this->model->creatconobject();

      // Fetch payment history from the model
      $result = $this->model->showPaymentHistory($conn, "paytable");
      
      // Close connection
      $this->model->CloseCon($conn);

      return $result;
    
  }
  public function getPaymentHistory2() {
    // Create a connection object
    $conn = $this->model->creatconobject();

    // Fetch payment history from the model
    $result = $this->model->showPaymentHistory2($conn, "previoustax");
    
    // Close connection
    $this->model->CloseCon($conn);

    return $result;
  
}
}


$A="";
$B="";


if(isset($_POST["payment"]))
{


    $mydb=new mydb1();
    $conobj=$mydb->creatconobject();
    $insert=$mydb->insertOrder1($conobj,"paytable",$_REQUEST["taxyear"],$_REQUEST["Amount"]);
    $A=$_REQUEST["taxyear"];
    $B=$_REQUEST["Amount"];

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





