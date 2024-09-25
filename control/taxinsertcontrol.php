<?php
include '../model/mydb1.php';



$errorMessagefullName = "";

$errorMessagewages="";
$errorMessagessn="";
$haserror="";

if (isset($_POST['Submit'])) {
    // Server-side validation
    if (empty($_POST['fullName'])) {
      $errorMessagefullName .= "Full Name is required.<br>";
      $haserror=1;
    }

    if (empty($_POST['ssn'])|| !is_numeric($_POST['ssn'])) {
        $errorMessagessn .= " Valid SOcial Sicurity Number  is required.<br>";
        $haserror=1;
    } 

    if (empty($_POST['wages']) || !is_numeric($_POST['wages'])) {
      $errorMessagewages .= "Valid wagesIncome are required.<br>";
      $haserror=1;
    }

    

    // Checkboxes for deductions (set to 1 if checked, otherwise 0)
    $standardDeduction = isset($_POST['standardDeduction']) ? 1 : 0;
    $itemizedDeductions = isset($_POST['itemizedDeductions']) ? 1 : 0;
  }

    // If there are no errors, proceed with the database insertion
    if ( $haserror===0) {
        $mydb1 = new mydb1();
        $conobj = $mydb1->creatconobject();

        $insert = $mydb1->insertorder($conobj, "taxreturn", $_POST["fullName"], $_POST["ssn"], $_POST["address"], $_POST["wages"], $_POST["interestIncome"], $_POST["dividendIncome"], $standardDeduction, $itemizedDeductions);

        if ($insert) {
            echo "Order created successfully.";
        } else {
            echo "Order not created.";
        }

        $mydb1->CloseCon($conobj);
    
  }
  
?>
