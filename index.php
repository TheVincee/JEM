<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["user"])) {
    header("Location: Login.php");
    exit();
}

// Logout logic
if (isset($_POST["logout"])) {
    // Destroy the session
    session_destroy();

    // Redirect to the login page after logout
    header("Location: Login.php");
    exit();
}
include 'db.php';
$isLoggedIn = isset($_SESSION['user']);

// Function to fetch filtered couriers from the database
function getFilteredCouriers($pdo, $vehicleType, $availability, $search) {
    $sql = "SELECT * FROM couriers WHERE 
            (:vehicleType = '' OR vehicle_type = :vehicleType) AND
            (:availability = '' OR availability = :availability) AND
            (name LIKE :search OR address LIKE :search)";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':vehicleType', $vehicleType, PDO::PARAM_STR);
    $stmt->bindValue(':availability', $availability, PDO::PARAM_STR);
    $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Fetch couriers from the database
$stmt = $pdo->prepare("SELECT * FROM couriers");
$stmt->execute();
$couriers = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Handle filtering and search
$vehicleTypeFilter = isset($_GET['vehicleType']) ? $_GET['vehicleType'] : '';
$availabilityFilter = isset($_GET['availability']) ? $_GET['availability'] : '';
$searchQuery = isset($_GET['search']) ? $_GET['search'] : '';

// Apply filters only if any filter or search query is provided
if ($vehicleTypeFilter !== '' || $availabilityFilter !== '' || $searchQuery !== '') {
    $filteredCouriers = getFilteredCouriers($pdo, $vehicleTypeFilter, $availabilityFilter, $searchQuery);
} else {
    $filteredCouriers = $couriers;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Courier System</title>
</head>
<body>

<div class="filter-container">
    <form method="get" action="index.php">
        <label for="vehicleType">Vehicle Type:</label>
        <select id="vehicleType" name="vehicleType">
            <option value="" <?php echo $vehicleTypeFilter === '' ? 'selected' : ''; ?>>All</option>
            <option value="Car" <?php echo $vehicleTypeFilter === 'Car' ? 'selected' : ''; ?>>Car</option>
            <option value="Bike" <?php echo $vehicleTypeFilter === 'Bike' ? 'selected' : ''; ?>>Bike</option>
            <option value="Truck" <?php echo $vehicleTypeFilter === 'Truck' ? 'selected' : ''; ?>>Truck</option>
        </select>

        <label for="availability">Availability:</label>
        <select id="availability" name="availability">
            <option value="" <?php echo $availabilityFilter === '' ? 'selected' : ''; ?>>All</option>
            <option value="1" <?php echo $availabilityFilter === '1' ? 'selected' : ''; ?>>Available</option>
            <option value="0" <?php echo $availabilityFilter === '0' ? 'selected' : ''; ?>>Not Available</option>
        </select>

        <label for="search">Search:</label>
        <input type="text" id="search" name="search" value="<?php echo $searchQuery; ?>">

        <input type="submit" value="Filter">
    </form>
</div>

<div id="courierContainer" class="courier-container">
    <?php foreach ($filteredCouriers as $courier): ?>
        <div class="courier-card availability-<?php echo $courier['availability']; ?>">
            <h3><?php echo $courier['name']; ?></h3>
            <p>Vehicle Type: <?php echo $courier['vehicle_type']; ?></p>
            <p>Address: <?php echo $courier['address']; ?></p>
            <p>Availability: <?php echo $courier['availability'] ? 'Available' : 'Not Available'; ?></p>

            <!-- Package Delivery Button -->
            <button class="package-delivery-btn" onclick="openModal(<?php echo $courier['id']; ?>)">Package Delivery</button>

            <!-- Book a Ride Button -->
            <a href="ride_modal.php" class="book-ride-btn" onclick="openRideModal(<?php echo $courier['id']; ?>)">
    <span>Book a Ride</span>
   </a>
        </div>
    <?php endforeach; ?>
</div>

<!-- Placeholder for Modal Content -->
<div id="modalContainer"></div>

<script>
    // JavaScript function to open the Package Delivery modal
    function openPackageModal(courierId) {
        document.getElementById("packageModal").style.display = "block";
        document.getElementById("courierIdPackage").value = courierId;
    }

    // JavaScript function to open the Book a Ride modal
    function openRideModal(courierId) {
        document.getElementById("ride_modal").style.display = "block";
        document.getElementById("courierIdRide").value = courierId;
    }

    // JavaScript function to close the modals
    function closeModal(modalId) {
        document.getElementById(modalId).style.display = "none";
    }
</script>

<!-- Include your other scripts here -->

<script>
    // JavaScript for Modal
    function openModal(courierId) {
        // Fetch the modal content using AJAX
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("modalContainer").innerHTML = this.responseText;
                document.getElementById("myModal").style.display = "block";
            }
        };

        xhttp.open("GET", "modal.php", true);
        xhttp.send();
    }

    // JavaScript function to close the modal
    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }
</script>


</body>
</html>
