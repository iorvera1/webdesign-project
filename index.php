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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <div class="main">
        <?php
        require_once "./include/navbar.php";
        ?>
        <br /><br /><br /><br /><br />

        <div class="image_container">

        </div>

        <div class="body_container">


            <div id="about_us">

                <!-- <h3>About Us</h3> -->
                <div id="mission_container">
                    <h2>About Us</h2>
                    <div class="card_flex">
                        <h1>Mission</h1>
                        <div>
                            <div class="card">
                                <img src="icons8-arrow-right-64.png"> To reduce the amount of time spent in registration of
                                motor vehicle and
                                information for all the vehicle owners.
                            </div>
                            <div class="card">
                                <img src="icons8-arrow-right-64.png"> To develop a system that will allow for the generation and
                                assignment of
                                an infinite identification mark or number
                                (that
                                is, the vehicle plate number).

                            </div>
                            <div class="card">
                                <img src="icons8-arrow-right-64.png"> To ensure a very high level of accuracy during
                                registration of certain
                                vehicle or category of vehicles that are
                                prone to
                                errors in the manual system.

                            </div>
                        </div>

                    </div>


                </div>
                <br /><br />
                <div class="card_flex" id="vision_container">
                    <h1>Vision</h1>
                    <div>

                        <div class="card">
                            To replace the manual system of
                            registration with a computerized system that will make registration simple and easy for the
                            registration officer and vehicle owner.

                        </div>
                    </div>
                </div>

                <br /><br /><br /><br /><br /><br />



            </div>
            <div id="contact_us">
                <br /><br /><br /><br /><br />
                <h3>Contact Us</h3>
                <div class="contact_flex">
                    <img src="icons8-phone-50.png">
                    <p>+234 000 000 0000</p>
                    <img src="icons8-mail-account-32.png">
                    <p>xxx@gmail.com</p>
                    <img src="icons8-map-pin-50.png">
                    <p>check our approved <a href="approved_centres.html" class="green_link">centres</a></p>

                </div>
            </div>


            <br /><br />
            <div id="jobs">
                <br /><br /><br /><br /><br />
                <h3>Join Us</h3>
                <div class="grid_container">
                    <div class="joinus_card_container">

                    </div>
                    <div class="joinus_card_container">

                    </div>
                </div>


            </div>

            <!-- <div class="something">
        
            </div> -->
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
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#mission_container">About</a></li>
                            <li><a href="#contact_us">Contact</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </footer>
</body>
<script>
    // Get the button:
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    // function scrollFunction() {
    //     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    //         mybutton.style.display = "block";
    //     } else {
    //         mybutton.style.display = "none";
    //     }
    // }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>

</html>