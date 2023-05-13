<?php
declare(strict_types=1);

require_once(__DIR__ . '/../utils/session.php');
$session = new Session();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="/../css/styles.css">
</head>

<body>
    <header>
        <div>
            <img class="logo" src="/../assets/logo.png" alt="logo">
        </div>
    </header>
    <div>
        <img class="image" src="/../assets/homepage.png" alt="illustration">
    </div>
    <div class="retangulo">
    </div>
    <div class="big_form_box_register">
        <div class="small_form_box">
            <h3 class="small_form_box_text">NEW MEMBERS</h3>
            <button class="small_form_box_btnHelp">Need help?</button>
        </div>
        <div class="wrapper">
            <form action="/../actions/action_register.php" method="post">
                <input type="hidden" name="csrf" value="<?= $_SESSION['csrf'] ?>">
                <div class="input_box">
                    <input type="email" id="email" name="email" placeholder="Enter your email">
                </div>
                <div class="input_box">
                    <input type="text" id="firstName" name="firstName" placeholder="Enter your first name">
                </div>
                <div class="input_box">
                    <input type="text" id="lastName" name="lastName" placeholder="Enter your last name">
                </div>
                <div class="input_box">
                    <span id="icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                        </svg></span>
                    <input type="password" id="password" name="password" placeholder="Enter your password">
                </div>
                <div class="remember_forgot">
                    <label class="container">
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                        Remember me
                    </label>
                </div>
                <div class="btnSubmit">
                    <button type="submit" id="login_btnSubmit">REGISTER</button>
                </div>
            </form>
        </div>
        <div class="login_button">
            <p>Already have an account?</p>
            <a href="/pages/index.php">Login</a>
        </div>
    </div>
</body>