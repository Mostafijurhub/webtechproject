
<?php
include '../control/updatepatientinfocontrol.php';

?>


<html>


<body>


update order 

<form action ="" method="post">
    

Patient's id: <input type ="text" name="Patientid" value="<?php echo $patientid?>">
Name : <input type ="text" name="Name" value="<?php echo $Name?>">
Age  : <input type ="text" name="Age" value="<?php echo $Age?>">
Address : <input type ="text" name="Address" value="<?php echo $Address?>">
Symptoms: <input type ="text" name="Symptoms" value="<?php echo $Symptoms?>">
Suggested Test: <input type ="text" name="test"value="<?php echo $SuggestedTest?>">
Email :<input type="text" name="Email" value="<?php echo $Email?>">
Mobile Number: <input type ="text" name="PhoneNumber"value="<?php echo $Phone?>">

<input type ="submit" name="update"  value="Update">
</form>
</body>
<html>
