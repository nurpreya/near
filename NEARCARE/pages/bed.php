<?php
require('db_connect.php');
require('functions.php');

// Get the hospital name from the URL
$hospitalName = isset($_GET['hospital']) ? $_GET['hospital'] : null;

// Use getHospitalData function from functions.php
$hospitalData = getHospitalData($hospitalName, $conn);

if ($hospitalData) {
    // Fetch other details as needed from $hospitalData and use them in HTML below
    $hospitalName = $hospitalData['hospital_name'];
    $hospitalAddress = $hospitalData['hospital_address'];
    $bedCost = $hospitalData['bed_cost'];
    // Fetch other details accordingly

    // Output the retrieved data in the HTML below
} else {
    // Handle the case when hospital data is not found
}
?>
<?php
// Assuming you fetch bed availability in $bedAvailability variable

// Example bed availability (replace this with your actual logic to fetch this data)
$bedAvailability = array(
    "1A" => true,
    "1B" => false,
    // ... more bed availability data
);

function isBedAvailable($bedId, $availabilityData) {
    return isset($availabilityData[$bedId]) ? $availabilityData[$bedId] : false;
}
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Near Care-Hospital Bed Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style/bed.css">

    <!-- Add a script to update the hospital information based on the selected hospital -->
    <script>
        // Function to update hospital information
        function updateHospitalInfo(hospitalData) {
            // Update the hospital name
            document.getElementById('hospitalName').textContent = hospitalData.hospital_name;
            
            // Update other hospital details as needed
            document.getElementById('hospitalAddress').textContent = hospitalData.hospital_address;
            document.getElementById('bedCost').textContent = hospitalData.bed_cost;
            // Update other details accordingly
        }

        // Function to fetch hospital information from the server
        function fetchHospitalData() {
            // Get the hospital name from the URL
            var hospitalName = '<?php echo $hospitalName; ?>';

            // Make an AJAX request to fetch hospital data
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var hospitalData = JSON.parse(xhr.responseText);
                    if (hospitalData) {
                        // Update hospital information
                        updateHospitalInfo(hospitalData);
                    }
                }
            };

            // Open a GET request to the server
            xhr.open('GET', 'get_hospital_data.php?hospital=' + encodeURIComponent(hospitalName), true);
            // Send the request
            xhr.send();
        }

        // Fetch hospital information when the page loads
        window.addEventListener('DOMContentLoaded', function () {
            fetchHospitalData();
        });
    </script>

<body>
    <main>
        <header>
            <h2><?php echo $hospitalName; ?></h2>
        </header>
        <div class="hospital-info">
            <img src="" alt="Hospital Image">
            <div class="detail-item">
                <label for="hospitalAddress">Address:</label>
                <span id="hospitalAddress"><?php echo $hospitalAddress; ?></span>
            </div>

            <div class="detail-item">
                <label for="bedCost">Bed Cost:</label>
                <span id="bedCost" class="bed-cost"><?php echo $bedCost; ?></span>
            </div>
        </div>
        <div class="card">
            <div class="card-header py-3 d-flex  bg-transparent border-bottom-0">
                <h6 class="mb-0 fw-bold ">Hospital Room Booking Status</h6>
            </div>
            <div class="card-body">
                <div class="room_book">
                    <div class="row row-cols-2 row-cols-sm-4 row-cols-md-6 row-cols-lg-6 g-3">
                    <div class="room col">
    <?php
    $bedId = "1A"; // Replace this with the corresponding bed ID dynamically
    $available = isBedAvailable($bedId, $bedAvailability);
    if ($available) {
        echo '<input type="checkbox" id="' . $bedId . '" checked>';
    } else {
        echo '<input type="checkbox" disabled id="' . $bedId . '">';
    }
    ?>
    <label for="<?php echo $bedId; ?>">
        <i class="fa fa-bed icon" aria-hidden="true"></i>
        <span class="text-muted">Room A-101</span>
    </label>
</div>
                        <div class="room col">
                            <input type="checkbox" id="1B">
                            <label for="1B"><i class="fa fa-bed icon" aria-hidden="true"></i><span class="text-muted">Room
                                    B-102</span></label>
                        </div>
                        <div class="room col">
                            <input type="checkbox" id="1C">
                            <label for="1C"><i class="fa fa-bed icon" aria-hidden="true"></i><span class="text-muted">Room
                                    C-103</span></label>
                        </div>
                        <div class="room col">
                            <input type="checkbox" disabled="" id="1D">
                            <label for="1D"><i class="fa fa-bed" aria-hidden="true"></i><span
                                    class="text-muted">Occupied</span></label>
                        </div>
                        <div class="room col">
                            <input type="checkbox" id="1E">
                            <label for="1E"><i class="fa fa-bed icon" aria-hidden="true"></i><span class="text-muted">Room
                                    D-104</span></label>
                        </div>
                        <div class="room col">
                            <input type="checkbox" id="1F" checked="">
                            <label for="1F"><i class="fa fa-bed icon" aria-hidden="true"></i><span class="text-muted">Room
                                    E-105</span></label>
                        </div>
                        <div class="room col">
                            <input type="checkbox" id="2A">
                            <label for="2A"><i class="fa fa-bed icon" aria-hidden="true"></i><span class="text-muted">Room
                                    F-106</span></label>
                        </div>
                        <div class="room col">
                            <input type="checkbox" id="2B">
                            <label for="2B"><i class="fa fa-bed icon" aria-hidden="true"></i><span class="text-muted">Room
                                    G-107</span></label>
                        </div>
                        <div class="room col">
                            <input type="checkbox" id="2C" checked="">
                            <label for="2C"><i class="fa fa-bed icon" aria-hidden="true"></i><span class="text-muted">Room
                                    H-108</span></label>
                        </div>
                        <div class="room col">
                            <input type="checkbox" id="2D">
                            <label for="2D"><i class="fa fa-bed icon" aria-hidden="true"></i><span class="text-muted">Room
                                    I-109</span></label>
                        </div>
                        <div class="room col">
                            <input type="checkbox" id="2E" checked="">
                            <label for="2E"><i class="fa fa-bed icon" aria-hidden="true"></i></i><span class="text-muted">Room
                                    J-110</span></label>
                        </div>
                        <div class="room col">
                            <input type="checkbox" id="2F">
                            <label for="2F"><i class="fa fa-bed icon" aria-hidden="true"></i></i><span class="text-muted">Room
                                    K-111</span></label>
                        </div>
                        <div class="room col">
                            <input type="checkbox" id="3A" checked="">
                            <label for="3A"><i class="fa fa-bed icon" aria-hidden="true"></i><span class="text-muted">Room
                                    L-112</span></label>
                        </div>
                        <div class="room col">
                            <input type="checkbox" id="3B">
                            <label for="3B"><i class="fa fa-bed icon" aria-hidden="true"></i><span class="text-muted">Room
                                    M-113</span></label>
                        </div>
                        <div class="room col">
                            <input type="checkbox" id="3C">
                            <label for="3C"><i class="fa fa-bed icon" aria-hidden="true"></i><span class="text-muted">Room
                                    N-114</span></label>
                        </div>
                        <div class="room col">
                            <input type="checkbox" id="3D">
                            <label for="3D"><i class="fa fa-bed icon" aria-hidden="true"></i><span class="text-muted">Room
                                    O-115</span></label>
                        </div>
                        <div class="room col">
                            <input type="checkbox" id="3E" checked="">
                            <label for="3E"><i class="fa fa-bed icon" aria-hidden="true"></i><span class="text-muted">Room
                                    P-116</span></label>
                        </div>
                        <div class="room col">
                            <input type="checkbox" id="3F">
                            <label for="3F"><i class="fa fa-bed icon" aria-hidden="true"></i><span class="text-muted">Room
                                    Q-117</span></label>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <button class="cta-button">Book Now</button>
    </main>
</body>
</html>
