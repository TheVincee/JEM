<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="booking.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <title>Document</title>
</head>
<body>
<form>
<button onclick="goBack()" class="back-button"><span class="material-icons">arrow_back</span></button>

    <h2>Courier Booking Form</h2>

    <label for="senderName">Sender's Name:</label>
    <input type="text" id="senderName" name="senderName" required>

    <label for="senderAddress">Sender's Address:</label>
    <input type="text" id="senderAddress" name="senderAddress" required>

    <label for="receiverName">Receiver's Name:</label>
    <input type="text" id="receiverName" name="receiverName" required>

    <label for="receiverAddress">Receiver's Address:</label>
    <input type="text" id="receiverAddress" name="receiverAddress" required>

    <label for="packageType">Package Type:</label>
    <select id="packageType" name="packageType" required>
      <option value="document">Document</option>
      <option value="parcel">Parcel</option>
    </select>

    <label for="deliveryDate">Delivery Date:</label>
    <input type="date" id="deliveryDate" name="deliveryDate" required>

    <button type="submit">Book Courier</button>
  </form>
  <script>
        function goBack() {
            window.location.href = 'Index.php'; // Replace 'index.html' with the actual URL of your index page
        }
    </script>
</body>
</html>