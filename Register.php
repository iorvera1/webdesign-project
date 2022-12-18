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
    <link rel="stylesheet" href="Register_style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <nav class="nav_not_fixed">
        <div class="logo">
            <div class="logo_container">
                <p>NVRS</p>
            </div>

            <div class="nav_center">
                <ul>
                    <li>
                        <a href="main.html" class="page_links">home</a>
                    </li>
                </ul>


            </div>
    </nav>
    <br /><br /><br />
    <?= isset($_GET['msg']) ?? $_GET['msg'] ?>

    <div class="form_container" id="regform-con">
        <form id="" action="<?= htmlspecialchars('./user/logic/signup') ?>">
            <h1>Register</h1><br />
            <p class="font_light">Already have an account? <a href="log_in.php" class="green_link">Log in</a></p><br /><br />
            <p></p>
            <label>Last Name</label><br /><br />
            <input type="text" name="lastName">
            <br />
            <label>First Name</label><br /><br />
            <input type="text" name="firstName">
            <br />
            <label>Middle Name</label><br /><br />
            <input type="text" name="middleName">
            <br /><br />
            <label>Phone Number</label><br /><br />
            <input type="phone number" name="phoneNumber">
            <br />
            <label>Email</label>
            <br /><br />
            <input type="email" name="email">
            <br /><br />
            <label>Password</label><br /><br />
            <input type="password" name="password">
            <br />
            <button type="submit" id="signin-btn" class="submit">Submit</button>
    </div>

    </form>
    </div>
</body>


</html>