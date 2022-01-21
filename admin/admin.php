<?php
session_start();

if($_SESSION['user']){
    header('Location: ./admin_panel.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <!--Meta connect-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-widt">
        <!--Style connect-->
        <link rel="stylesheet" type="text/css" href="../style/index.css">
        <link rel="shortcut icon" type="image/png" href="../style/icons/logo.png">
        <!--Title connect-->
        <title>Administrator Login</title>
        <!--Script preconnect-->
        <link>
        <!--Script connect-->
        <script></script>
    </head>
    <body>
        <!--Wrapper container-->
        <div class="wrapper">
            <!--Header container-->
            <header class="header">
                <!--Header wrapper container-->
                <div class="header_wrapper">
                    <!--Logo container-->
                    <div class="logo">
                        <a href="https://www.referansclc.com/"><img class="image" src="../style/icons/ref_logo.png"></a>
                    </div>
                    <!--Name container-->
                    <div class="name">
                        <p class="name_p">Referans Klinik Laboratoriya Mərkəzi</p>
                    </div>
                    <!--Link container-->
                    <div class="link">
                        <a href="http://www.fonetbt.com/"><img class="image" src="../style/icons/link.png"></a>
                    </div>
                </div>
                <style>
        .msg {
            color: red;
        }
    </style>
            </header>
            <!--Main container-->
            <main class="main">
                <!--Main wrapper container-->
                <div class="main_wrapper">
                    <!--Main Header-->
                    <div class="main_header">
                        <!--Main Title-->
                        <div class="main_title">
                            <p class="main_title_p">Administrator Login</p>
                        </div>
                    </div>
                    <div class="line">
                        
                    </div>
                    <!--Form container-->
                    <div class="main_form">
                        <!--Form name-->
                        <div class="form_img">
                            <img src="../style/icons/user.png">
                        </div>
                        <div class="form_post">
                            <p class="form_post_p">Username:</p>
                            <p class="form_post_p">Password:</p>
                        </div>
                        <!--Form-->
                        <div class="form_input">
                            <form class="form_input_f" method="post" action="../vendor/connect_login.php">
                                <input class="inpute_p"  name="login" value=""><br>
                                <input class="inpute_p" type="password" name="password" value=""><br>

                                <button class="inpute_b" type="submit">Login</button>
                                <?php
                            if ($_SESSION['message_pass']) {
                                echo '<p class="msg"> ' . $_SESSION['message_pass'] . ' </p>';
                            }
                            unset($_SESSION['message_pass']);
                            ?>
                            </p>
                            </form>
                        </div>     
                    </div>
                </div>
            </main>
            <!--Footer container-->
            <footer class="footer">
                <div class="footer_img">
                    <img class="footer_img_img" src="../style/icons/footer.jpeg">
                </div>
            </footer>
        </div>
    </body>
</html>