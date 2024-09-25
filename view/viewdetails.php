<?php
// Assuming you have fetched the payment details from the database, for example:
$paymentDetails = [
    'taxyear' => '2023',
    'amount' => '500.00',
    'date_paid' => '2024-09-24',
    'taxpayer_name' => 'John Doe',
    'payment_method' => 'Credit Card',
    'transaction_id' => 'TX1234567890'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment Receipt</title>
<style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .receipt-container {
            width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .receipt-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .receipt-header img {
            width: 100px;
        }
        .receipt-details {
            width: 100%;
            margin-bottom: 20px;
        }
        .receipt-details table {
            width: 100%;
            border-collapse: collapse;
        }
        .receipt-details th, .receipt-details td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .receipt-details th {
            background-color: #f2f2f2;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
        }
        .footer p {
            margin: 0;
        }
</style>
</head>
<body>
 
<div class="receipt-container">
<h1>Payment Receipt</h1>
<div class="receipt-header">
<img src="logo.png" alt="Company Logo">
<p>Thank you for your payment!</p>
</div>
 
    <div class="receipt-details">
<table>
<tr>
<th>Taxpayer Name</th>
<td><?php echo $paymentDetails['taxpayer_name']; ?></td>
</tr>
<tr>
<th>Tax Year</th>
<td><?php echo $paymentDetails['taxyear']; ?></td>
</tr>
<tr>
<th>Amount Paid</th>
<td><?php echo "$" . $paymentDetails['amount']; ?></td>
</tr>
<tr>
<th>Date Paid</th>
<td><?php echo $paymentDetails['date_paid']; ?></td>
</tr>
<tr>
<th>Payment Method</th>
<td><?php echo $paymentDetails['payment_method']; ?></td>
</tr>
<tr>
<th>Transaction ID</th>
<td><?php echo $paymentDetails['transaction_id']; ?></td>
</tr>
</table>
</div>
 
    <div class="footer">
<p>If you have any questions about this receipt, please contact our support.</p>
<p>Company Name | Address | Phone Number | Email</p>
</div>
</div>
 
</body>
</html>

