
<?php
require '../control/searchcontrol.php';

// Instantiate the controller
$controller = new DashboardController();

// Get payment history from the controller
$paymentHistory = $controller->getPaymentHistory();
$paymentHistory2 = $controller->getPaymentHistory2();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Taxpayer Dashboard</title>

    <link rel="stylesheet" href="../CSS/sty.css">
</head>
<body>
    <div class="container">
        <h1>Taxpayer Dashboard</h1>

        <!-- Previous Year Tax Returns Section -->
        <h2>Previous Year Tax Returns</h2>
        <table  boarder="1">
            <thead>
                <tr>
                    <th>Tax Year</th>
                    <th>Status</th>
                    <th>Payment Status</th>
                    <th>View Return</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php
if ($paymentHistory2->num_rows > 0) {
    $counter = 1; // Initialize a counter for unique button IDs
    // Loop through and display each row
    while ($row = $paymentHistory2->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['year'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "<td>" . $row['paystatus'] . "</td>";
        // Create a View button that links to a details page, passing the tax year as a parameter
        echo "<td><a href='viewdetails.php?year=" . $row['year'] . "'><button class='view-btn' id='view-btn-$counter'>View</button></a></td>";
        echo "</tr>";
        $counter++; // Increment the counter for the next row
    }
} else {
    echo "<tr><td colspan='4'>No records found</td></tr>";
}
?>
                    
            </tbody>
        </table>

        <!-- Payment History Section -->
        <h2>Payment History</h2>
        <table>
            <thead>
                <tr>
                    <th>Tax Year</th>
                    <th>Amount Paid</th>
                    <th>Date Paid</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <?php
                if ($paymentHistory->num_rows > 0) {
                    // Loop through and display each row
                    while ($row = $paymentHistory->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['taxyear'] . "</td>";
                        echo "<td>" . $row['Amount'] . "</td>";
                        echo "<td>" . $row['time'] . "</td>";  // Assuming 'date_paid' is a field in the database
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No records found</td></tr>";
                }
                ?>
                </tr>
            </tbody>
        </table>

        <!-- Make Payment Section -->
        <h2>Make Payment</h2>
        <form action=" " method="POST">
            <label for="taxyear">Tax Year:</label>
            <input type="text" id="taxyear" name="taxyear" >
            <br><br>
            <label for="Amount">Payment Amount:</label>
            <input type="text" id="Amount" name="Amount" >
            <br><br>
            <button type="submit" name="payment"  value="payment" class="make-payment-btn">Make Payment</button>
        </form>
    </div>
</body>
</html>
