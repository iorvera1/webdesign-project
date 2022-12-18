<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="Register_style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="main">
        <nav>
            <div class="nav">
                <div class="logo">
                    <div class="logo_container">
                        <p>NVRS</p>
                    </div>
                </div>

                <div class="nav_center" id="dashboardnav-center">
                    <ul>
                        <li>
                            <a href="dashboard.html" class="page_links">home</a>
                        </li>
                        <li>
                            <a href="vehicle_registration.html" class="page_links">Vehicle registration</a>
                        </li>
                        <li>
                            <a href="Plate_number_verification.html" class="page_links">Plate number verification</a>
                        </li>
                        <li>
                            <a href="registered_vehicles.html" class="page_links">Registered Vehicles</a>
                        </li>
                        <li id="dropdown">
                            <a href="approved_centres copy.html" class="page_links">Approved Centres</a>
                            <!-- <div class="dropdown-content">
                                        <a href="">Approved Centres</a>
                                        <a href="#" >Link 2</a>
                                        
                                    </div> -->
                        </li>
                        <li>
                            <a href="FAQ copy.html" class="page_links">FAQ</a>
                        </li>
                    </ul>
                </div>

                <div class="nav_right">
                    <div class="register_button">
                        <a href="main.html">Logout</a>
                    </div>
                </div>

            </div>
        </nav>
        <!--------------------------------------------------FORM---------------------------------------------------------------------------------------  -->

        <br /><br /><br />
        <div class="page-header">
            <h1>Register your vehicle now !</h1>
        </div>
        <br /><br /><br />
        <div class="form_container">
            <form class="vehicle-form" id="regForm" action="<?= htmlspecialchars("./user/logic/add-vehicle") ?>" method="post">

                <!-- <h1>Register</h1><br/>
    <p class="font_light">Already have an account? <a href="log_in.html" class="green_link">Log in</a></p><br/><br /> -->

                <div class="tab">
                    <h1>Vehicle Information</h1>
                    <br><br><br>
                    <div class="form_flex">
                        <div>

                            <label for="vCategory">vehicle category</label><br /><br />
                            <!-- <div class="custom-select"> -->
                            <select name="vehicle" id="vCategory" required>
                                <option value="" disabled selected hidden>Pick an option</option>
                                <option value="commercial">commercial</option>
                                <option value="government">government</option>
                                <option value="private">private</option>
                            </select>
                            <!-- </div> -->


                            <br /><br />
                            <label>Vehicle Make</label><br /><br />
                            <input type="text" id="vMake" name="vehicleMake" oninput="this.className = ''">
                            <br /><br />
                            <label>color</label><br /><br />
                            <input type="text" id="color" name="vehicleColor" oninput="this.className = ''">
                            <br /><br />

                            <label for="LocalGov">Local Government</label><br /><br />
                            <!-- <div class="custom-select"> -->
                            <select name="localgov" id="LocalGov" required>
                                <option value="" disabled selected hidden>Pick an option</option>
                                <option value="Epe">EPE</option>
                                <option value="Apapa">Apapa</option>
                                <option value="Festac">Festac</option>
                                <option value="Mushin">Mushin</option>
                            </select>
                            <br><br>

                            <label for="fuel_type">Feul Type</label><br /><br />
                            <!-- <div class="custom-select"> -->
                            <select name="fuelType" id="fuel_type" required>
                                <option value="" disabled selected hidden>Pick an option</option>
                                <option value="Petrol">Petrol</option>
                                <option value="Diesel">Diesel</option>
                                <option value="Bio Feul">Bio Feul</option>
                                <option value="Others">Others</option>

                            </select>
                            <!-- </div> -->

                            <br /><br />
                        </div>


                        <!-- <label>Model</label><br /><br />
                    <input type="text" id="model" oninput="this.className = ''">
                    <br /><br /> -->
                        <label>Vehicle Number</label><br /><br />
                        <input type="text" id="vNum" name="vehicleNumber" oninput="this.className = ''">
                        <br /><br />
                        <label>Vehicle Type</label><br /><br />
                        <!-- <div class="custom-select"> -->
                        <select name="vehicleType" id="vType" required>
                            <option value="" disabled selected hidden>Pick an option</option>
                            <option value="Bus">Bus</option>
                            <option value="Motor Cycle">Motor Cycle</option>
                            <option value="Truck">Truck</option>
                            <option value="Van">Van</option>
                            <option value="Wagon">Wagon</option>
                            <option value="Suv">Suv</option>
                            <option value="Others">Others</option>
                        </select>
                        <!-- </div> -->
                        <br /><br />

                        <select name="localgov" id="localgov" required>
                            <option value="" disabled selected hidden>Pick an option</option>
                            <option value="Epe">Epe</option>
                            <option value="Apapa">Apapa</option>
                            <option value="Mushin">Mushin</option>
                        </select>

                        <label>Chasis no</label><br /><br />
                        <input type="text" id="chasisNo" name="chasisNo" oninput="this.className = ''">
                        <br /><br />
                    </div>
                </div>
                Car Papers:
                <input type="file" name="File">
                <center>
                    <button type="submit" id="signin-btn" class="submit">Submit</button>
                </center>
        </div>
    </div>

    </form>
    </div>
    </div>

    <footer>
        <div class="footer-content">
            <!--add all information -->
            <h3>Nigerian Vehicle Registration System </h3>
            <p>Replacing the manual system of
                registration with a computerized system that will make registration simple and easy for the
                registration officer and vehicle owner.</p>
            <!-- <ul class="socials">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                </ul> -->
            <div class="footer-bottom">
                <p>copyright &copy;2022 <a href="#">Nigerian Vehicle Registration System</a> </p>
                <div class="footer-menu">
                    <ul class="f-menu">
                        <li><a href="main.html">Home</a></li>
                        <li><a href="#mission_container">About</a></li>
                        <li><a href="#contact_us">Contact</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

<script src="main.js"></script>
<script>
    const actualBtn = document.getElementById("actual-btn");

    const fileChosen = document.getElementById("file-chosen");

    actualBtn.addEventListener("change", function() {
        fileChosen.textContent = this.files[0].name;
    });
</script>

</html>