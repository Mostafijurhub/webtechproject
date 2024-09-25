
<?php
require '../control/taxinsertcontrol.php';
?>

<html>

<head>
   
    <title>Tax Return Form</title>
    
    <link rel="stylesheet" href="../CSS/style.css">

</head>
<body>
    <div class="form-container">
        <h2>Tax Return Form</h2>
        <form action="" method="POST" onsubmit="return formValidation()">
            <table>
                <tr>
                    <th colspan="2">Personal Information</th>
                </tr>
               
                <tr>
                    <td><label for="fullName">Full Name:</label></td> 
                </tr>
                <tr>
                    <td><input type="text" id="fullName" name="fullName" > </td> 
                  
                </tr>
                <tr>
                <?php echo $errorMessagefullName ?>
                </tr>

                <tr>
                    <td><label for="ssn">Social Security Number:</label></td>
                </tr>
                <tr>
                    <td><input type="text" id="ssn" name="ssn" ></td>
                    <?php echo $errorMessagessn ?>
                </tr>
                <tr>
                    
                </tr>
                <tr>
                    <td><label for="address">Address:</label></td>
                </tr>
                <tr>
                    <td><textarea id="address" name="address" rows="3" ></textarea></td>
                    <tr>
                    <td>
                        <div id="addressErrorDiv" class="error-message"></div> 
                    </td>
                </tr>
                    
               
                <tr>

                <tr>
                    <th colspan="2">Income Information</th>
                </tr>
                <tr>
                    <td><label for="wages">Wages and Income:</label></td>
                </tr>
                <tr>
                    <td><input type="number" id="wages" name="wages"  ></td>
                </tr>
                <tr>
                <?php echo $errorMessagewages ?>
                </tr>
                <tr>
                    <td><label for="interestIncome">Interest Income:</label></td>
                </tr>
                <tr>
                    <td><input type="number" id="interestIncome" name="interestIncome" ></td>
                </tr>
                <tr>
                    <td>
                        <div id="interestIncomeErrorDiv" class="error-message"></div> 
                    </td>
                </tr>
                <tr>
                    <td><label for="dividendIncome">Dividend Income:</label></td>
                </tr>
                <tr>
                    <td><input type="number" id="dividendIncome" name="dividendIncome"></td>
                </tr>

                <tr>
                    <th colspan="2">Deductions</th>
                </tr>
                <tr>
    <td><label for="standardDeduction">Standard Deduction:</label></td>
</tr>
<tr>
    <td><input type="checkbox" id="standardDeduction" name="standardDeduction" value="1"></td>
</tr>
<tr>
    <td><label for="itemizedDeductions">Itemized Deductions:</label></td>
</tr>
<tr>
    <td><input type="checkbox" id="itemizedDeductions" name="itemizedDeductions" value="1"></td>
</tr>

                <tr>
                    <td colspan="2" class="submit-row">
                        <button type="submit"  name="Submit" value="submit">Submit Return</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <script src="../js/validation.js">
</script>
</body>
</html>
