<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="./style/booked.css" >
</head>

<body>
    <div class="container">
        <h2>Book a Bed</h2>
        <form id="booking-form" method="post" action="process_form.php">
            <div class="form-group">
                <label for="patient-name">Patient Name:</label>
                <input type="text" id="patient-name" name="patient-name" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>
            </div>
            <div class="form-group">
                <label for="disease">Disease:</label>
                <input type="text" id="disease" name="disease" required>
            </div>
            <div class="form-group">
                <label for="hospital-name">Hospital Name:</label>
                <input type="text" id="hospital-name" name="hospital-name" required>
            </div>
            <div class="form-group">
                <label for="area">Area:</label>
                <select id="area" name="area" aria-placeholder="select">
                    <option value="">--Select an area--</option>
                    <option value="area1">Gulshan</option>
                    <option value="area2">Motijheel</option>
                    <option value="area3">Rampura</option>
                </select>
            </div>
            <div class="form-group">
                <label for="booking-date">Booking Date:</label>
                <input type="date" id="booking-date" name="booking-date" required>
            </div>
            <input type="hidden" name="hospitalName" value="Hospital Name Goes Here">
            <button type="submit" id="book-button">Book Bed</button>
        </form>
    </div>

    <script>
        var ageInput = document.getElementById("age");

        ageInput.addEventListener("input", function () {
            var ageValue = parseInt(ageInput.value);

            if (ageValue < 0) {
                ageInput.value = "";
            }
        });
    </script>
</body>

</html>