<?php 

    include('../config/constants.php'); 
    include('login-check.php');
?>
<html>
    <head>
        <title>Food Order Website</title>

        <link rel="stylesheet" href="../css/admin.css">
    </head>

<body>
        <!-- Menu Section Starts -->
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
              <li><a href="index.php">Dashboard</a></li>
                <li><a href="manage-admin.php">Admin</a></li>
                <li><a href="manage-users.php">Users</a></li>
                    <li><a href="manage-category.php">Category</a></li>
                  <li><a href="manage-food.php">Food</a></li>
                    <li><a href="manage-order.php">Order</a></li>
                    <li><a href="manage-contact.php">Contacts</a></li>
                    <li><a href="logout.php">Logout</a></li> 
                </ul>
            </div>
        </div> 
        <!-- Menu Section Ends -->
    </body>