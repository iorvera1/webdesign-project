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
    <title>Document</title>
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
    <br /><br /><br /><br /><br />

    <div class="form_container">
        <?= isset($_GET['msg']) ?? $_GET['msg'] ?>
        <form action="<?= htmlspecialchars('user/logic/signin') ?>" method="POST">
            <!-- <h1>Welcome Back</h1><br /> -->
            <p class="font_light">Don't have an account? <a href="Register.html" class="green_link">Register</a></p><br /><br />
            <label>Email</label>
            <br /><br />
            <input type="email" name="email" oninput="this.className = ''">
            <br /><br />
            <label>Password</label><br /><br />
            <input type="password" name="password" oninput="this.className = ''">
            <br /><br />
            <p class="forgot_password"><a href="">forgot password?</a></p>
            <br /><br />
            <button type="submit" id="signin-btn" class="submit">Submit</button>
        </form>
    </div>
    <?php
    require_once __DIR__ . "/user/includes/script.php";
    require_once __DIR__ . "/user/ajax/signin.php";
    ?>

</body>

</html>