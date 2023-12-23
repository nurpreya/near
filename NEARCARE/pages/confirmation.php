<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirmation</title>
    <link rel="stylesheet" href="./style/confirmation.css">
</head>

<body>
    <div class="container">
    <nav class="navbar">
            <div class="head">
                <a href="index.php">
                    <div id="circle"></div>
                    <img src="../images/+.png" id="logo">
                    <span id="cn">Near Care</span>
                </a>
            </div>
            <div class="menu-toggle" id="menu-toggle">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <ul class="nav-links" id="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="hospitals.php">Hospitals</a></li>
                <li><a href="confirmation.php" style="color:rgb(75, 122, 242);">Confirmation</a></li>
                <li><a href="receipt.php">Receipt</a></li>
                <li id="log"><a href="signin.php">Sign in</a></li>
                <li id="sign"><a href="signup.php">Sign up</a></li>
            </ul>
        </nav>
        <div class="form-box">
            <?php
            // Retrieve the hospital name from the query parameter
            $hospitalName = $_GET['hospitalName'];

            // Output the hospital name in the h1 element
            echo "<h1>$hospitalName</h1>";
            ?>
            <form>
                <div class="input-group">
                    <div class="input-group">
                        <div class="input-field">
                            <!-- <label for="floor"><b>Room No</b></label> -->
                            <input type="text" placeholder="Room No" disabled>
                        </div>
                        <div class="input-group">
                            <div class="input-field">
                                <!-- <label for="floor"><b>Bed Cost</b></label> -->
                                <input type="text" placeholder="Bed Cost" disabled>
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox">
                                <span id="cb" style="opacity:0.5 ;">Ambulance</span>
                            </div>
                            <div class="input-group">
                                <div class="input-field">
                                    <!-- <label for="floor"><b>Service Cost</b></label> -->
                                    <input type="text" placeholder="Service Cost" disabled>
                                </div>
                            </div>
                            <div class="btn-field">
                                <a href="hospitals.php">
                                    <button type="button">Previous</button>
                                </a>
                                <a href="receipt.php">
                                    <button type="button">Confirm</button>
                                </a>

                            </div>
            </form>

        </div>
        <img src="../images/Untitled-1.png" id="img">
    </div>
</body>

</html>