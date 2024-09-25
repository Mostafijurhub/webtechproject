
<?php
require '../control/processEmployee.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
</head>
<body>
    <Fieldset>
        <legend>Add Employee</legend>
    <form action="" method="POST">
<table>
<tr>
<td>
Id:
</td>
<td> <input type="text" name="id"></td> </tr>
<tr>
 <td>
name:
</td>
<td> <input type="text" name="name"></td> </tr>

<tr>
            <td>
            Date of Birth:
</td>
<td> <input type="date" name="dob"></td> </tr>

<tr>
<td>
Position:
</td>
<td> <input type="text" name="position" ></td> </tr>

<tr>
<td>
Depertment:
</td>
<td> <input type="text" name="department"></td> </tr>

<tr>
<td>
Hire Date:
</td>
<td> <input type="date" name="hiredate"></td> </tr>

<tr>
<td>
Salary:
</td>
<td> <input type="text" name="salary" ></td> </tr>
<tr>
<td>
Email:
</td>
<td> <input type="email" name="email" ></td> </tr>
<tr>
<td>
Phone:
</td>
<td> <input type="text" name="phone" ></td> </tr>
<tr>
    <td>

</td>
<td>

<input type="submit" name="addEmployee" value="Add Employee">
</td>
</tr>
    </form>
    </fiedset>
</body>
</html>
