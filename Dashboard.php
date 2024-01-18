
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
<link rel="stylesheet" href="Dashboard.css">
    <!--FONTAWESOME-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li class="active">
                <a href="#">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
            </li>
           
            <li>
                <a href="History.php">
                    <i class="fas fa-history"></i> <!-- Added history icon -->
                    <span>Transactions</span>
                </a>
            </li>

            <li>
                <a href="UserReview.php">
                    <i class="fas fa-star"></i>
                    <span>Reviews</span>
                </a>
            </li>

            

            <li>
                <a href="Inbox.php">
                    <i class="fas fa-inbox"></i>
                    <span>Inbox</span>
                </a>
            </li>

            <li>
                <a href="Calendar.php">
                    <i class="fas fa-calendar"></i>
                    <span>Calendar</span>
                </a>
            </li>
             <!-- Logout Link in Sidebar -->
             <li>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <button type="submit" name="logout" class="logout-btn">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
            </li>
        </ul>
        
    </div>


    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h1><span>Shop-1</span></h1>
                <h2>Dashboard</h2>
            </div>

        </div>
        <div class="card--container">
            <h3 class="main--title">Recent Bookings</h3>
            <div class="card--wrapper">
                <div class="payment--card yellow">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">Newly Appointments</span>
                        </div>
                        <?php
                            #require 'dbconfig.php';
                            #$query = "SELECT id FROM appointments ORDER BY id";  
                            #$query_run = mysqli_query($connection, $query);
                            #$row = mysqli_num_rows($query_run);
                            #echo '<h4>'.$row.'</h4>';
                        ?>
                        <i class="fas fa-users icon dark-purpule"></i>
                    </div>
                    <!--  <span class="card-detail"> **** **** **** 3484</span> -->
                </div>

                <div class="payment--card light-yellow">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">Approved-Appointments</span>
                            <?php
                            #require 'dbconfig.php';
                            #$query = "SELECT id FROM approval ORDER BY id";  
                            #$query_run = mysqli_query($connection, $query);
                            #$row = mysqli_num_rows($query_run);
                            #echo '<h4>'.$row.'</h4>';
                        ?>
                        </div>
                        <i class="fas fa-users icon dark-green"></i>
                    </div>
                    <!--  <span class="card-detail"> **** **** **** 3484</span> -->
                </div>

                <div class="payment--card light-red">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">Rejected-Appointments</span>
                             <?php

                            #require 'dbconfig.php';
                            #$query = "SELECT id FROM approval ORDER BY id";  
                            #$query_run = mysqli_query($connection, $query);
                            #$row = mysqli_num_rows($query_run);
                           #echo '<h4>'.$row.'</h4>';
                        ?>

                        </div>
                        <i class="fas fa-users icon dark-green"></i>
                    </div>
                    <!--   <span class="card-detail"> **** **** **** 3484</span> -->
                </div>
                <div class="payment--card light-red">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">Canceled Bookings</span>
                        <?php

                            //require 'dbconfig.php';
                            //$query = "SELECT user_id FROM user_inbox ORDER BY user_id";  
                            //$query_run = mysqli_query($connection, $query);
                            //$row = mysqli_num_rows($query_run);
                            //echo '<h4>'.$row.'</h4>'
                        ?>

                        </div>
                        <i class="fas fa-users icon dark-green"></i>
                    </div>
                    <!--   <span class="card-detail"> **** **** **** 3484</span> -->
                </div>
               

            </div>
        </div>
        <div class="tabular--wrapper">
            <h3 class="main--title">Repair Bookings</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Date and Time</th>
                            <th>Vehicle</th>
                            <th>Issue</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php
// Assuming you have a database connection established

// Establish the database connection
$connection = mysqli_connect('localhost', 'root', '', 'booking_system');

// Check if the connection was successful
if ($connection) {
    // Prepare the query
    $query = "SELECT * FROM appointments";

    // Execute the query
    $result = mysqli_query($connection, $query);

    // Check if the query was successful
    if ($result) {
        // Check if a row was found
        while ($row = mysqli_fetch_assoc($result)) {
            // Access the booking data using column names
            $id = $row['id'];
            $name = $row['name'];
            $address = $row['address'];
            $phone = $row['phone'];
            $email = $row['email'];
            $datetime = $row['datetime'];
            $vehicle = $row['vehicle'];
            $issues = $row['issues'];
            $status = $row['status'];

            // Set "Pending" for empty status
            if (empty($status)) {
                $status = "Pending";
            }

            echo '
            <tr>
                <td>' . $id . '</td>
                <td>' . $name . '</td>
                <td>' . $address . '</td>
                <td>' . $phone . '</td>
                <td>' . $email . '</td>
                <td>' . $datetime . '</td>
                <td>' . $vehicle . '</td>
                <td>' . $issues . '</td>
                <td>' . $status . '</td>
                <td style="white-space: nowrap;">
                <a class="btn btn-primary" href="approve.php?id=' . $id . '">Approve</a>
                <a class="btn btn-danger" href="reject.php?id=' . $id . '">Reject</a>
                </td>
            </tr>';
        }
    }
}
?>      </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script>
</script>

</body>
</html>
