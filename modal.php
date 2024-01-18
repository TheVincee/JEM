<?php
include 'db.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Retrieve data from the form
        $courierId = $_POST['courierId'];
        $pickupLocation = $_POST['pickupLocation'];
        $deliveryDestination = $_POST['deliveryDestination'];
        $weight = $_POST['weight'];
        $productValue = $_POST['productValue'];
        $pickupDate = date('Y-m-d', strtotime($_POST['pickupDate']));

        // Insert data into the join table
        $stmt = $pdo->prepare("INSERT INTO courier_packages (courier_id, pickup_location, delivery_destination, weight, product_value, pickup_date) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$courierId, $pickupLocation, $deliveryDestination, $weight, $productValue, $pickupDate]);

        // Close the modal after submitting the form and display success message
        echo '<script>alert("Data inserted successfully!"); window.parent.closeModal(); window.parent.location.reload();</script>';
        exit();
    } catch (PDOException $e) {
        // Handle any database errors here
        echo "Error: " . $e->getMessage();
    }
}

// Fetch the courier ID from the query string
$courierId = isset($_GET['courierId']) ? $_GET['courierId'] : '';

// Fetch courier details for display
$stmtCourier = $pdo->prepare("SELECT * FROM couriers WHERE id = ?");
$stmtCourier->execute([$courierId]);
$courier = $stmtCourier->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package Delivery</title>
    <link rel="stylesheet" href="Delivery.css">
</head>
<body>

<div class="modal" id="myModal">

    <div class="modal-content">
    <span class="close-button" onclick="closeModal()">&times;</span>

        <h2>Package Delivery for Courier ID: <?php echo $courierId; ?></h2>

        <form method="post" action="modal.php">
            <input type="hidden" name="courierId" value="<?php echo $courierId; ?>">

            <label for="pickupLocation">Pickup Location:</label>
            <input type="text" id="pickupLocation" name="pickupLocation" required>

            <label for="deliveryDestination">Delivery Destination:</label>
            <input type="text" id="deliveryDestination" name="deliveryDestination" required>

            <label for="weight">Weight:</label>
            <input type="text" id="weight" name="weight" required>

            <label for="productValue">Product Value:</label>
            <input type="text" id="productValue" name="productValue" required>

            <label for="pickupDate">Pickup Date:</label>
            <input type="date" id="pickupDate" name="pickupDate" required>

            <input type="submit" value="Submit">
        </form>
    </div>
</div>
<script>
    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }
</script>

</body>
</html>
