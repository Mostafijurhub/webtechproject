<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>Book Website</title>
    <link rel="stylesheet" href="../CSS/sty.css">
    <style>
        

body {
  margin: 0;
  font-family: Arial, sans-serif;
  background-color: white;
}


.logo {
  font-size: 30px;
  font-weight: bold;

  background-color: #5db3f5; 
  color: black;
}


.sticky {
  background-color: #d8c9a3; 
  padding: 10px;
  text-align: left;
}

.sticky table {
  width: 100%;
}

.sticky a {
  text-decoration: none;
  font-size: 18px;
  color: #0000EE; 
  padding: 10px 15px;
}



.relative {
  text-align: center;
  margin-top: 50px;
}


.button {
  border: none;
  padding: 15px 25px;
  text-align: center;
  display: inline-block;
  font-size: 16px;
  margin: 10px;
  cursor: pointer;
}

.button4 {
  background-color: lightgray;
  color: black;
}

.button4:hover {
  background-color: darkgray;
}

.button5 {
  background-color: #444444;
  color: white;
}


.fixed {
  background-color: limegreen; 
  color: black;
  text-align: center;
  padding: 10px;
  position: absolute;
  bottom: 0;
  width: 100%;
}

  
        </style>
</head>

<body>
    <div class="logo">MyBook</div>
  
    <div class="sticky">
        <table>
            <tr>
                <td><a href="#">Home</a></td>
                    <td><a href="#">About Us</a></td>
                    <td><a href="#">Services</a></td>
                    <td><a href="#">Contact Us</a></td>
                    <td><a href="#">Login</a></td>
            </tr>
    </table>
    </div>


       
          
<div class="relative">
    <h1>Welcome to MyBook</h1>
    <p>Your trusted partner for financial solutions</p>
    <button class="button button4">Sign Up</button>
    <button class="button button5">About US</button>
</div>
  


    <div class="fixed">
        <p>&copy; 2024 BankPro. All Rights Reserved.</p>
    </div>

</body>

</html>

