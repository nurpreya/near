<?php
require('db_connect.php'); // Include the database connection file

if (isset($_GET['division']) && isset($_GET['area'])) {
    $divisionId = $conn->real_escape_string($_GET['division']);
    $areaId = $conn->real_escape_string($_GET['area']);

    // Retrieve hospitals based on the selected division and area
    $hospitalQuery = "SELECT * FROM hospitals WHERE area_id = $areaId";
    $hospitalResult = $conn->query($hospitalQuery);

    if (!$hospitalResult) {
        die("Database error: " . $conn->error);
    }
} else {
    header("Location: hospital_selection.php"); // Redirect to the hospital selection page if division or area is not selected
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style/bed.css" />
</head>
<body>
    <main>
        <header>
            <h2>Select a Hospital</h2>
        </header>

        <div class="hospital-list">
            <ul>
                <?php
                while ($hospital = $hospitalResult->fetch_assoc()) {
                    echo "<li><a href='bed_page.php?hospital=" . $hospital['hospital_id'] . "'>" . $hospital['hospital_name'] . "</a></li>";
                }
                ?>
            </ul>
        </div>
    </main>
</body>
</html>
