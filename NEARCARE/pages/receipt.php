<!DOCTYPE html>
<html lang="en">

<head>
    <title>Receipt</title>
    <link rel="stylesheet" href="./style/receipt.css">
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
                <li><a href="hospitals.php" >Hospitals</a></li>
                <li><a href="confirmation.php">Confirmation</a></li>
                <li><a href="receipt.php" style="color:rgb(75, 122, 242);">Receipt</a></li>
                <li id="log"><a href="signin.php">Sign in</a></li>
                <li id="sign"><a href="signup.php">Sign up</a></li>
            </ul>
        </nav>
        <div class="upper">
            <form>
                <label for="name" id="name">Patient Name
                    <input type="text" id="name1" placeholder="">
                </label>
                <label for="disease" id="disease">Disease
                    <input type="text" id="disease1" placeholder="">
                </label>
                <label for="hospital" id="hospital">Hospital Name
                    <input type="text" id="hospital1" placeholder="">
                </label>

                <div class="bottompart">
                    <span class="cost">Cost:</span>
                    <div class="line1"></div>
                    <label for="bed" id="bed">Bed cost
                        <input type="text" id="bed1" placeholder="">
                    </label>
                    <label for="service" id="service">Service cost
                        <input type="text" id="service1" placeholder="">
                    </label>
                    <label for="ambulance" id="ambulance">Ambulance cost
                        <input type="text" id="ambulance1" placeholder="">
                    </label>
                    <div class="line2"></div>
                    <label for="total" id="total">Total cost
                        <input type="text" id="total1" placeholder="">
                    </label>
                </div>
            </form>
        </div>

    </div>

</body>

</html>