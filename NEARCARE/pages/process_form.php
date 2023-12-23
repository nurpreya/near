<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "hospital";

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get form data
    $patientName = $_POST['patient-name'];
    $age = $_POST['age'];
    $disease = $_POST['disease'];
    $hospitalName = $_POST['hospital-name'];
    $area = $_POST['area'];
    $bookingDate = $_POST['booking-date'];

    // Insert data into the database
    $sql = "INSERT INTO patients (patient_name, age, disease, hospital_name, area, booking_date) VALUES (:patient_name, :age, :disease, :hospital_name, :area, :booking_date)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':patient_name', $patientName);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':disease', $disease);
    $stmt->bindParam(':hospital_name', $hospitalName);
    $stmt->bindParam(':area', $area);
    $stmt->bindParam(':booking_date', $bookingDate);
    $stmt->execute();

    // Redirect to a confirmation page or display a success message
    header("Location: bed.php");
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
