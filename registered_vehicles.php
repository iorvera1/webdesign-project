<?php
require_once "./user/config/Dbcontroller.php";
$db = new Dbcontroller();
?>
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
    <link rel="stylesheet" href="registeresV-style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Vehicles</title>
</head>

<body>
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
    <br /><br /><br /><br /><br /><br />
    <h1>Registered Vehicles</h1>
    <div class="table">
        <table>

            <div class="table-responsive">
                <table class="table table-bordered table-primary" id="driverTable">
                    <thead>
                        <tr>
                            <th scope="col">Vehicle ID</th>
                            <th scope="col">Vehicle Category</th>
                            <th scope="col">Vehicle Maker</th>
                            <th scope="col">Vehicle Color</th>
                            <th scope="col">Fuel Type</th>
                            <th scope="col">Vehicle Number</th>
                            <th scope="col">Vehicle Type</th>
                            <th scope="col">Chasis Number</th>
                            <th scope="col">State</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = $db->select_all('vechile');
                        if ($result !== false) :
                            foreach ($result as $row) { ?>
                                <tr>
                                    <td><?= $row['vechileID']; ?></td>
                                    <td><?= $row['vehicleCat']; ?></td>
                                    <td><?= $row['vehicleMake']; ?></td>
                                    <td><?= $row['vehicleColor']; ?></td>
                                    <td><?= $row['fuelType']; ?></td>
                                    <td><?= $row['vechileNumber']; ?></td>
                                    <td><?= $row['vechileType']; ?></td>
                                    <td><?= $row['chasisNo']; ?></td>
                                    <td><?= $row['State']; ?></td>


                            <?php
                            }
                        endif;
                            ?>
                                </tr>
                    </tbody>
                </table>
            </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Table End -->
    </table>

    <?php
    require_once "./user/includes/script.php";
    ?>

    <script>
        $(document).ready(function() {
            $('#driverTable').DataTable();
        });
    </script>

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

</html>